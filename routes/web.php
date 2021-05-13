<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;



Route::get('/', function () {
    return view('home');
});



Route::view("home","home");
Route::get('/package',[PackageController::class,'index']);
Route::post('/addimage',[PackageController::class,'store'])->name('addimage');

Route::get('/updatePackage',[PackageController::class,'display']);

Route::get('/editimage/{id}',[PackageController::class,'edit']);
Route::put('/updateimage/{id}',[PackageController::class,'update']);

Route::view("dashboard","dashboard");

