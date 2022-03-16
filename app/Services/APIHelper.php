<?php
 
namespace App\Services;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use ErrorException;
use Illuminate\Support\Facades\Auth;
use App\Policies\ApplicationPolicy;
use App\Events\APIRequestProcessed;
use App\Services\APIHelper;

class APIHelper
{
    /**
     * Format subject class name from dashed to Camel Case with upper case first character.
     */
    public static function dashesToCamelCase($string, $capitalizeFirstCharacter = false) 
    {
        $str = str_replace('-', '', ucwords($string, '-'));

        if (!$capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }

        return $str;
    }

    /**
     * Convert Camel Case format to under score.
     */
    public static function camelCaseToUnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }

    /**
     * Get all columns by table name.
     */
    public static function getTableColumns($tableName) {
        [ $keys, $values ] = Arr::divide(
            Schema::getColumnListing($tableName)
        );

        return $values;
    }

    /**
     * Add column to database table.
     */
    public static function addColumnToTable($tableName, $columnName, $datatype = 'text') {
        $sql_datatype = '';

        switch($datatype) {
            case 'text':
            case 'email':
            case 'radio':
            case 'file':
            case 'checkbox':
            case 'attachment':
            case 'tel':
            case 'password': {
                $sql_datatype = 'TEXT';
                break;
            }
            case 'number': {
                $sql_datatype = 'INT';
                break;
            }
        }

        DB::statement(sprintf("ALTER TABLE `%s` ADD COLUMN `%s` %s",$tableName, $columnName, $sql_datatype));
    }

    /**
     * Get table name by subject name.
     */
    public static function getTableNameBySubjectName($subject) {
        if(class_exists("App\\Models\\{$subject}")) {
            $subjectClass = app("App\\Models\\{$subject}");
    
            return $subjectClass::TABLE_NAME;
        } else {
            return APIHelper::camelCaseToUnderScore($subject);
        }
    }

    /**
     * Get input data send from client.
     */
    public static function parseInputData(Request $request) {
        $input = $request->all();
        $data = [];

        /**
         * If client send an array then process as format [column_name, value]
         */
        if( isset($input['fields'][0]) ) {
            foreach($input['fields'] as $field) {
                $data[] = $field;
            }
        }
        /**
         * Format key-value
         */
        else {
            foreach ($input['fields'] as $key => $value) {
                if(is_string($value) || is_numeric($value)) {
                    $data[] = [
                        'column_name' => $key,
                        'value'       => $value,
                        'data_type'   => 'text',
                    ];
                } else {
                    $data[] = [
                        'column_name' => $key,
                        'value'       => $value['value'],
                        'data_type'   => $value['type'],
                    ];
                }
            }
        }

        return $data;
    }

    /**
     * Get update keys.
     */
    public static function getUpdateKeys(Request $request) {
        $keys = [];

        if(isset($request['keys'])) {
            $r_keys = $request['keys'];
            if(is_string($r_keys)) {
                $r_keys = json_decode($r_keys);
            }

            foreach($r_keys as $key => $value) {
                $keys[] = [
                    'column_name' => $key,
                    'value'       => $value,
                ];
            }
        }

        return $keys;
    }

    /**
     * Save base64 file to database and local folder.
     */
    public static function saveBase64File($img, $filename) {
        $folderPath = "public/file/";
        $image_parts = explode(";base64,", $img);
        $image_base64 = base64_decode($image_parts[1]);
        $uniqid = uniqid();
        $file_path = $folderPath . $uniqid . '_' . $filename;

        Storage::disk('local')->put($file_path, $image_base64, 'public');

        // Return public URL of image
        return config('app.user_url') . '/storage/file/' . $uniqid . '_' . $filename;
    }

    /**
     * Format input data for inser or update.
     */
    public static function formatInputDataForInsert($input) {
        $data_to_insert = [];

        foreach($input as $field) {
            // Single file
            if($field['data_type'] === 'file') {
                $data_to_insert[$field['column_name']] = APIHelper::saveBase64File($field['value'], $field['file_name']);
            }
            // Group of files
            else if($field['data_type'] === 'attachment') {
                $data = [];

                foreach($field['value'] as $item) {
                    if($item['data_type'] == 'text') {
                        $data[] = [
                            'url'  => $item['file'],
                            'name' => $item['name'],
                        ];
                    } 
                    else if( $item['data_type'] == 'file' ) {
                        $data[] = [
                            'url'  => APIHelper::saveBase64File($item['file'], $item['name']),
                            'name' => $item['name'],
                        ];
                    }
                }

                $data_to_insert[$field['column_name']] = json_encode($data);
            }
            else {
                $data_to_insert[$field['column_name']] = $field['value'];
            }
        }

        return $data_to_insert;
    }

    /**
     * Get query condition
     */
    public static function getQueryCondition(Request $request)  {
        $conditions = [];

        if(isset($request['where'])) {
            // Case send as column format 
            if(isset($request['where'][0])) {
                foreach($request['where'] as $field) {
                    $conditions[] = [
                        'column_name'     => $field['column_name'],
                        'value'           => $field['value'],
                        'search_operator' => $field['search_operator'],
                    ];
                }
            }
            // Case send as key-value format 
            else {
                foreach ($request['where'] as $key => $value) {
                    $conditions[] = [
                        'column_name'     => $key,
                        'value'           => $value,
                        'search_operator' => '=',
                    ];
                }
            }
        }

        return $conditions;
    }

    /**
     * Create table if not exists.
     */
    public static function createTableIfNotExists($subject) {
        $tableName = APIHelper::getTableNameBySubjectName($subject);

        // Trying get default subject create table SQL if possible.
        if(class_exists("App\\Models\\{$subject}")) {
            $subjectClass = app("App\\Models\\{$subject}");
        } else {
            $subjectClass = null;
        } 

        $create_table_sql = '';

        // Trying get default SQL create srting form object model if possible.
        if($subjectClass && method_exists($subjectClass, 'getDefaultTableCreateSQL')) {
            $create_table_sql = $subjectClass->getDefaultTableCreateSQL($tableName);
        } 
        // Default system create table SQL.
        else {
            $create_table_sql = "
            CREATE TABLE IF NOT EXISTS `{$tableName}` (
                `id` VARCHAR(50) NOT NULL,
                `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
                `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
                `deleted_at` DATETIME NULL,
                PRIMARY KEY (`id`));              
            ";
        }

        if(! Schema::hasTable($tableName) ) {
            DB::statement($create_table_sql);
        }
    }

    /**
     * Add column to table if not exists
     */
    public static function addColumnToTableIfNotExists($tableName, $inputData) {
        // If data is empty, nothing to process
        if(count($inputData) === 0) {
            return;
        }

        // Get all exists columns in database.
        $exists_columns = APIHelper::getTableColumns($tableName);

        foreach($inputData as $field) {
            if( !in_array($field['column_name'], $exists_columns) ) {
                APIHelper::addColumnToTable($tableName, $field['column_name'], $field['data_type']);
            }
        }
    }
}