<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::redirect('/','/elo');
Route::get('/elo',[EmployeeController::class,'index']);

