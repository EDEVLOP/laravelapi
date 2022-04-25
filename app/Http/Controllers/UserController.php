<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
   
    public function users() {
        $result=User::all(['id as user_id','name as fullname','email']);
        $tres=count($result);
        // foreach($result as $res){
           
        //     $data[]=$res->email;
        // }
        return response()->json([
            'status'=>200,
            
            'users'=>$result
            
        ],200);

        
    }
    public function users_location($id) {
        $result=User::where('id',$id)->get(['user_lattitude','user_longitude']);
        //$tres=count($result);
        // foreach($result as $res){
           
        //     $data[]=$res->email;
        // }
        return response()->json([
            'status'=>200,
            'location'=>$result
            
        ],200);

        
    }
}
