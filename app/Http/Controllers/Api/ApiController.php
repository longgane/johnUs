<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    public function __construct()
    {

    }

    public static function formatResponse($data = [], $meta = [], $status = '200'): JsonResponse {
        if(empty($data)){
            $response['meta'] = [
                'message' => 'データがありません'
            ];
        }else{
            $response = [
                'success' => true,
            ];
        }
        $response['result'] = $data;

        if($meta) {
            $response['meta'] = array_merge($response['meta'] ?? [], $meta);
        }
        return Response::json($response, $status);
    }

    public static function formatResponseMessage($message, $status = '200'): JsonResponse {
        $response = [
            'success' => true,
        ];

        $response['meta'] = [
            'message' => $message
        ];

        return Response::json($response, $status);
    }
}
