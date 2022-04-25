<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Destination extends Controller
{
    public function destination(){
        $result=['latitude' => "20.299210911642533",
        'longitude' => "85.83094599744156",
    ];

    return response()->json([
        'status'=>200,
        'destination'=>$result
        
    ],200);
    }
}
