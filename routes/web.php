<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;



Route::get('/', function () {
    return view('hello');
});

//Route::post("users",[UsersController::class,'getData']);
Route::view("login","users");
Route::view("home","home");
Route::view('create','createpackage');
Route::post('create',[PackageController::class,'store']);
Route::view("dashboard","dashboard");