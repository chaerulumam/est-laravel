<?php

namespace App\Helpers;

class APIFormatter
{
    protected static $response = [
        'status' => null,
        'message' => null,
        'data' => null
    ];

    public static function createApi($status = null, $message = null, $data = null, $code = 1)
    {
        self::$response['status'] = $code;
        self::$response['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, $status);
    }
}
