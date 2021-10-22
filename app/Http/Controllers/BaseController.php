<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result,$message,$code=200){

        $response=[
            'succes'=>true,
            'data'=>$result,
            'message'=>$message
        ];
        return response()->json($response,$code);

    }

    public function sendError($result,$message,$code=400){

        $response=[
            'succes'=>false,
            'data'=>$result,
            'message'=>$message
        ];
        return response()->json($response,$code);
    }
}
