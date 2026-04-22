<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPro;
class UserProController extends Controller
{
    //
    public function index($id){
        $user = UserPro::with('profile')->findOrFail($id);
        $user->profile->update([
            'bio'=>'hello',
            'phone'=>'0968859525',
        ]);
        return response()->json([
            'status'=>'success',
            'data'=>$user
        ]);
    }
}
