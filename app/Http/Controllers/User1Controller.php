<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;   
class User1Controller extends Controller
{
    //
    public function index(){
        $user = User1::doesntHave('address')->get();
        return response()->json([
            'status'=>"success",
            'data'=>$user
        ]);
    }
}
