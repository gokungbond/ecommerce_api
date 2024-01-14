<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait HasApiResponses {

    public function success($data = [], $message = 'success', $statusCode = Response::HTTP_OK) 
    {
        return response()->json([
                'data' => $data,
                'message' => $message,
                'success' => true
            ]
        , $statusCode);
    }

    public function fail($message = 'failed', $statusCode = Response::HTTP_UNPROCESSABLE_ENTITY) 
    {
        return response()->json([
                'message' => $message,
                'success' => false
            ]
        , $statusCode);
    }

}