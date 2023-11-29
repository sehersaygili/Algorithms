<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function SuccessApiResponse($data, $message = null) {
        $response = [
            'data' => $data,
            'message' => $message,
            'code' => 200,
            'success' => true
        ];
        return response()->json($response);
    }

    public function ErrorApiResponse($data, $message = null) {
        $response = [
            'data' => $data,
            'message' => $message,
            'code' => 400,
            'success' => false
        ];
    }
}
