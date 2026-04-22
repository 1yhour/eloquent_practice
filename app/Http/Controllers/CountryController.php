<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Capital;
class CountryController extends Controller
{
    //
    public function index(){
        $capital = Country::with('capital')->get();
        return response()->json([
            'status'=>'success',
            'data'=>$capital
        ]);
    }
}
