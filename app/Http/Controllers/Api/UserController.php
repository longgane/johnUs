<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class UserController extends ApiController
{
    public function __construct() {

    }

    /**
     * Create
     */
    public function create(Request $request){
        $fields = $request->all();
    
        $data_to_insert = [];

        foreach($fields as $field) {
            $exists_columns = User::getTableColumns(User::TABLE_NAME);
            if(!in_array($field['column_name'], $exists_columns)) {
                User::addColumnToTable(User::TABLE_NAME, $field['column_name'], $field['data_type']);
            }

            $data_to_insert[$field['column_name']] = $field['value'];
        }

        $user = User::create($data_to_insert);

        return self::formatResponse([
            'id' => $user->id,
        ]);
    }

    /**
     * Update
     */
    public function update(Request $request, $id){
        $fields = $request->all();
    
        $data_to_update = [];

        foreach($fields as $field) {
            $exists_columns = User::getTableColumns(User::TABLE_NAME);
            if(!in_array($field['column_name'], $exists_columns)) {
                User::addColumnToTable(User::TABLE_NAME, $field['column_name'], $field['data_type']);
            }

            $data_to_update[$field['column_name']] = $field['value'];
        }

        User::where('id', $id)
                ->update($data_to_update);
    }

    public function list(Request $request) {
        $items =  DB::table('v_user_list')->orderBy('updated_at', 'DESC')->get();

        return self::formatResponse($items);
    }

    public function detail(Request $request, $id) {
        $fund = User::find($id)->toArray();
        $data = [];

        foreach ($fund as $key => $value) {
            $data[] = [
                'column_name' => $key,
                'value'       => $value,
            ];
        }
        
        return $data;
    }
}
