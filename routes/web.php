<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserProController;

Route::redirect('/','/elo');
Route::get('/elo',[EmployeeController::class,'index']);
Route::get('/user',[User1Controller::class,'index']);
Route::get('/student',[StudentController::class,'index']);
Route:: get('/car',[CarController::class,'index']);
Route::get('/country',[CountryController::class,'index']);
Route::get('/user/{id}',[UserProController::class,'index']);