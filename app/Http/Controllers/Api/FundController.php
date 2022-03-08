<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Models\Fund;
use App\Models\FundApplication;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class FundController extends ApiController
{
    public function __construct() {

    }

    private function saveBase64Image($img, $filename) {
        $folderPath = "public/fund/";
        $image_parts = explode(";base64,", $img);
        $image_base64 = base64_decode($image_parts[1]);
        $uniqid = uniqid();
        $file_path = $folderPath . $uniqid . '_' . $filename;

        Storage::disk('local')->put($file_path, $image_base64, 'public');

        // Return public URL of image
        return config('app.user_url') . '/storage/fund/' . $uniqid . '_' . $filename;
    }

    /**
     * Create
     */
    public function create(Request $request){
        $fields = $request->all();
    
        $data_to_insert = [];

        foreach($fields as $field) {
            $exists_columns = Fund::getTableColumns(Fund::TABLE_NAME);
            if(!in_array($field['column_name'], $exists_columns)) {
                Fund::addColumnToTable(Fund::TABLE_NAME, $field['column_name'], $field['data_type']);
            }

            if($field['data_type'] === 'file') {
                $data_to_insert[$field['column_name']] = $this->saveBase64Image($field['value'], $field['file_name']);
            } else {
                $data_to_insert[$field['column_name']] = $field['value'];
            }
        }

        $fund = Fund::create($data_to_insert);


        return self::formatResponse([
            'id' => $fund->id,
        ]);
    }

    /**
     * Update
     */
    public function update(Request $request, $id){
        $fields = $request->all();
    
        $data_to_update = [];

        foreach($fields as $field) {
            $exists_columns = Fund::getTableColumns(Fund::TABLE_NAME);
            if(!in_array($field['column_name'], $exists_columns)) {
                Fund::addColumnToTable(Fund::TABLE_NAME, $field['column_name'], $field['data_type']);
            }

            if($field['data_type'] === 'file') {
                $data_to_update[$field['column_name']] = $this->saveBase64Image($field['value'], $field['file_name']);
            } else {
                $data_to_update[$field['column_name']] = $field['value'];
            }
        }

        Fund::where('id', $id)
                ->update($data_to_update);
    }

    public function list(Request $request) {
        $funds = Fund::query()->orderBy('updated_at', 'DESC')->get();

        return self::formatResponse($funds);
    }

    public function detail(Request $request, $id) {
        $fund = Fund::find($id)->toArray();
        $data = [];

        foreach ($fund as $key => $value) {
            $data[] = [
                'column_name' => $key,
                'value'       => $value,
            ];
        }
        
        return $data;
    }

    private function encode_utf8($data) {
        return iconv(mb_detect_encoding($data, "sjis-win, UTF-8"), 'UTF-8', $data);
    }

    private function readCSVfile($filepath)
    {
        $rows   = array_map('str_getcsv',  file($filepath));
        $header = array_shift($rows);
        $csv    = array();
        foreach($rows as $row) {
            $csv[] = array_combine($header, $row);
        }

        return $csv;
    }

    public function uploadCSVFundApplication(Request $request, $fund_id) {
        $csv_data = $this->readCSVfile($request->file);

        // Empty file error
        if(!$csv_data || count($csv_data) === 0) {
            return response()->json([
                'suscess' => false
            ], 400);
        }

        // Add column if not exists
        $exists_columns = FundApplication::getTableColumns(FundApplication::TABLE_NAME);
        foreach ($csv_data[0] as $key => $value) {
            if(!in_array($this->encode_utf8($key), $exists_columns)) {
                FundApplication::addColumnToTable(FundApplication::TABLE_NAME, $this->encode_utf8($key));
            }
        }

        $data_to_insert = [];
        foreach($this->readCSVfile($request->file) as $item) {
            $row = [];
            foreach ($item as $key => $value) {
                $column_name = $this->encode_utf8($key);

                if($column_name === 'ユーザーID') {
                    $column_name = 'user_id';
                }

                $row[$column_name] = $this->encode_utf8($value);
            }
            $row['fund_id'] = $fund_id;
            $data_to_insert[] = $row;
        }

        $items = FundApplication::upsert($data_to_insert, ['fund_id', 'user_id']);

        return self::formatResponse($items);
    }

    public function getFormatCSVFundApplication(Request $request){
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=fund_application_".date('Y-m-d').".csv",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $callback = function () {
            $columns = [
                mb_convert_encoding('ユーザーID',"SJIS-win", "UTF-8"),
                mb_convert_encoding('抽選結果',"SJIS-win", "UTF-8"),
                mb_convert_encoding('口数',"SJIS-win", "UTF-8"),
                mb_convert_encoding('入金期限日',"SJIS-win", "UTF-8"),
            ];

            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            fputcsv($file, 
                [
                    mb_convert_encoding('1',"SJIS-win", "UTF-8"),
                    mb_convert_encoding('申込',"SJIS-win", "UTF-8"),
                    mb_convert_encoding('3',"SJIS-win", "UTF-8"),
                    mb_convert_encoding('2022-01-20',"SJIS-win", "UTF-8"),
                ]
            );
            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }

    public function getListFundApplication(Request $request) {
        $applications = FundApplication::query()->orderBy('updated_at', 'DESC')->get();

        return self::formatResponse($applications);
    }
}
