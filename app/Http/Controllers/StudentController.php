<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function index(){
        $student = Student::with('studentCard')->get();
        return response()->json([
            'status'=>"success",
            'data'=>$student
        ]);
    }
}
