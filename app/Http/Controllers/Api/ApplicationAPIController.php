<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use ErrorException;
use Illuminate\Support\Facades\Auth;
use App\Policies\ApplicationPolicy;
use Illuminate\Http\Request;
use App\Events\APIRequestProcessed;
use App\Services\APIHelper;
use Exception;
use App\Models\AppModel;
use Illuminate\Support\Facades\Response;

class ApplicationAPIController extends ApiController
{
    public function __construct() {
        parent::__construct();
    }

    /**
     * Handle incomming request
     */
    public function handleRequest(Request $request, $subject, $action) {
        /**
         * Default build in action.
         */
        $default_actions = [
            'create', 'update', 'list', 'get', 'delete',
        ];
        
        $allowed_subjects = config('api_policies.allowed_subject');

        /**
         * Convert subject name to valid format in source code.
         */
        $subject = ucfirst( APIHelper::dashesToCamelCase( $subject ) );
        $action  = APIHelper::dashesToCamelCase( $action );

        /**
         * Check subject access permission
         */
        if(isset($allowed_subjects) && !in_array($subject, $allowed_subjects)) {
            return response()->json([
                'message' => 'Subject not supported'
            ], 403);
        }

        /**
         * Check request authorization
         */
        if($this->isAuthorizationError($subject, $action, $request)) {
            return response()->json([
                'message' => 'Permission denied'
            ], 403);
        }

        if(class_exists("App\\Models\\{$subject}")) {
            $subjectClass = app("App\\Models\\{$subject}");
        } else {
            $subjectClass = null;
        } 

        try {
            if(in_array($action, $default_actions)) {
                // Call hook before
                if($subjectClass && method_exists($subjectClass, 'beforeProcessAPIHook')) {
                    $request = $subjectClass->beforeProcessAPIHook($request, $action);
                }

                $response = $this->{$action}($request, $subject);

                // Call hook after
                if($subjectClass && method_exists($subjectClass, 'afterProcessAPIHook')) {
                    $response = $subjectClass->afterProcessAPIHook($response, $action);
                }
                
                // Trigger event that request already process successfully.
                event(new APIRequestProcessed($request->all(), $subject, $action, $response));
              
                // Case client request download CSV.
                if(isset($request['format']) && $request['format'] === 'csv') {
                    // Return CSV download stream.
                    return $this->getDownloadCSVStream($response, $request->file_name);
                }
                else {
                    // Normal response format.
                    return self::formatResponse($response);
                }
            } else {
                if(class_exists("App\\Models\\{$subject}")) {
                    $subjectClass = app("App\\Models\\{$subject}");
                    $response = $subjectClass->{$action}($request, []);

                    return $response;
                } else {
                    return response()->json([
                        'message' => 'No subject to handle this request.'
                    ], CLIENT_ERROR);
                }
            }
        } catch(ErrorException $ex) {
            // Call hook on error.
            if($subjectClass && method_exists($subjectClass, 'onErrorProcessAPIHook')) {
                $subjectClass->onErrorProcessAPIHook($request, $action, $ex);
            }
            throw $ex;
        }
    }

    /**
     * Verify request authorization.
     */
    private function isAuthorizationError($subject, $action, $request) {
        $subjectConfig = config('api_policies.subject.' . $subject);

        $is_403_error = false;

        // Application policy register
        $polixyService = new ApplicationPolicy();
        
        // If don't have any setting, we leave request free by defaults
        if($subjectConfig) {
            foreach ($subjectConfig as $key => $value) {
                if(!$value && $key === $action || !$value && $key === '*') {
                    $is_403_error = true;
                    break;
                }

                if($value && $key === $action || !$value && $key === '*') {
                   continue;
                }

                if($key === '*' || $key === $action) {
                    foreach($value as $checkFunc) {
                        if ( ! $polixyService->{$checkFunc}($request) ) {
                            $is_403_error = true;
                            break;
                        }
                    }
                }
            }
        }

        return $is_403_error;
    }

    /**
     * System create
     */
    private function create(Request $request, $subject) {
        $input = APIHelper::parseInputData($request);
        $tableName = APIHelper::getTableNameBySubjectName($subject);

        $data_to_insert = [];

        DB::beginTransaction();

        APIHelper::createTableIfNotExists($subject);
        APIHelper::addColumnToTableIfNotExists($tableName, $input);

        $data_to_insert = APIHelper::formatInputDataForInsert($input);
 
        /**
         * Check if need generate UUID for ID colum before create or not.
         */
        try {
            $type = DB::getSchemaBuilder()->getColumnType($tableName, 'id');

            if($type === 'string') {
                $data_to_insert['id'] = (string) Str::orderedUuid();
            }
        } catch(Throwable $ex) {
            logger($ex->getMessage());
        }

        try {
            $id = DB::table($tableName)->insertGetId($data_to_insert);
            DB::commit();

            return [
                'id' => $id ? $id : $data_to_insert['id']
            ];
        }
        catch(Throwable $ex) {
            DB::rollback();
            throw $ex;
        }
    }

    /**
     * System update
     */
    private function update(Request $request, $subject) {
        $input = APIHelper::parseInputData($request);
        $tableName = APIHelper::getTableNameBySubjectName($subject);
        $keys = APIHelper::getUpdateKeys($request);

        $data_to_update = [];

        DB::beginTransaction();
        APIHelper::addColumnToTableIfNotExists($tableName, $input);
        $data_to_update = APIHelper::formatInputDataForInsert($input);
 
        if(count($keys) === 0) {
            throw new Exception('Properties keys is required.');
        }

        try {
            $query = DB::table($tableName);

            foreach($keys as $key) {
                $query->where($key['column_name'], $key['value']);
            }

            $query->update($data_to_update);

            DB::commit();
            return [];
        }
        catch(Throwable $ex) {
            DB::rollback();
            throw $ex;
        }
    }


    /**
     * System delete
     */
    private function delete(Request $request, $subject) {
        $tableName = APIHelper::getTableNameBySubjectName($subject);
        $keys = APIHelper::getUpdateKeys($request);

        DB::beginTransaction();
 
        if(count($keys) === 0) {
            throw new Exception('Properties keys is required.');
        }

        try {
            $query = DB::table($tableName);

            foreach($keys as $key) {
                $query->where($key['column_name'], $key['value']);
            }

            $data_to_update['deleted_at'] = Carbon::now();
            $query->update($data_to_update);

            DB::commit();
            return [];
        }
        catch(Throwable $ex) {
            DB::rollback();
            throw $ex;
        }
    }

    /**
     * System get one record by keys
     */
    private function get(Request $request, $subject) {
        $tableName = APIHelper::getTableNameBySubjectName($subject);
        $keys = APIHelper::getUpdateKeys($request);

        if(count($keys) === 0) {
            throw new Exception('Properties keys is required.');
        }

        $query = DB::table($tableName);

        foreach($keys as $key) {
            $query->where($key['column_name'], $key['value']);
        }

        // Limit field choose by client.
        if(isset($request['select'])) {
            $query->select($request['select']);
        }

        if(isset($request['format']) && $request['format'] === 'column') {
            $item = $query->first();
            $data = [];

            foreach ($item as $key => $value) {
                $data[] = [
                    'column_name' => $key,
                    'value'       => $value,
                ];
            }

            // Return column format.
            return $data;
        }
        else {
            // Return normal format.
            return $query->first();
        }
    }

    /**
     * System list function
     */
    private function list(Request $request, $subject) {
        $tableName = APIHelper::getTableNameBySubjectName($subject);
        // Default page size.
        $page_size = 12;
        $conditions = APIHelper::getQueryCondition($request);

        if(class_exists("App\\Models\\{$subject}")) {
            $subjectClass = app("App\\Models\\{$subject}");
        } else {
            $subjectClass = null;
        }

        // If subject build in list method, trying to use it.
        if($subjectClass && method_exists($subjectClass, 'listData')) {
            // Check if download CSV request 
            if(isset($request['format']) && $request['format'] === 'csv') {
                // Return all records!!
                return $subjectClass->listData($conditions, $request->select);
            } else {
                // Return list with pagination support.
                return $subjectClass->listData($conditions, $request->select, $request->page);
            }
        }

        $query = DB::table($tableName);

        // Binding query condition
        AppModel::bindingQueryCondition($query, $conditions);

        // Limit field choose by client.
        if(isset($request->select)) {
            $query->select($request['select']);
        }

        // Sort data by client request.
        if(isset($request->sort)) {
            foreach($request->sort as $item) {
                // Example) "created_at DESC"
                $sort = explode(" ", $item);
                $query->orderBy($sort[0], $sort[1]);
            }
        }

        // Check if download CSV request 
        if(isset($request->format) && $request->format === 'csv') {
            // Return all record!!
            return $query->get();
        }

        if($request->page > 0) {
            if($request->page_size) {
                $page_size = $request->page_size;
            }
            // Pagination results.
            return $query->paginate($page_size);
        } else {
            // Return all records.
            return $query->get();
        }
    }

    /**
     * Get download CSV stream.
     */
    private function getDownloadCSVStream($items, $filename = 'csv_download') {
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => 'attachment; filename=' . $filename . '_' . date('Y-m-d') . '.csv',
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $callback = function () use ($items) {
            $headers = [];

            foreach ($items[0] as $key => $value) {
                $headers[] = mb_convert_encoding($key,"SJIS-win", "UTF-8");
            }
            $file = fopen('php://output', 'w');
            fputcsv($file, $headers);

            foreach ($items as $item) {
                $row = [];

                foreach ($item as $key => $value) {
                    $row[] = mb_convert_encoding($value, "SJIS-win", "UTF-8");
                }
                fputcsv($file, $row);
            }
            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }
}
