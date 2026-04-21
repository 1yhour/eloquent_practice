<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //
    
    public function index(){
        $emp = Employee::with('idCard')->get();
        return response()->json([
            'status'=>"success",
            'data'=>$emp
        ]);
    }
}
