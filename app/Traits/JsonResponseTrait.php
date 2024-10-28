<?php

namespace App\Traits;

trait JsonResponseTrait {
    public function ResponseSuceess(string $message='',mixed $data = null){
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function ResponseFailure(int $statusCode ,string $message = '')
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ],$statusCode);
    }
}
