<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class ContactResponse
{
    public static function success($data = null, $message = null, $status = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    public static function error($message = null, $status = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $status);
    }
}