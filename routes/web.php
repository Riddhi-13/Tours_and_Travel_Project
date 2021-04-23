<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;



Route::get('/', function () {
    return view('hello');
});



Route::view("home","home");
Route::get('/package',[PackageController::class,'index']);
Route::post('/addimage',[PackageController::class,'store'])->name('addimage');
Route::view("dashboard","dashboard");