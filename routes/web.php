<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
<<<<<<< HEAD
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/newlog',function(){
    return view('newlog');
});

Route::get('/newReg',function(){
    return view('newReg');
});



Route::get('/historyDisplay',[App\Http\Controllers\PackageController::class, 'viewTicket']);
Route::get('/cancelBooking/{id}',[PackageController::class,'delete2']);

Route::get('/view',[App\Http\Controllers\ViewController::class, 'viewPackage']);
Route::get("/detail/{id}",[App\Http\Controllers\ViewController::class,'detail']);

Route::group(['middleware'=>['auth']],function() {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('bookTour/{id}',[App\Http\Controllers\PackageController::class,'index2'])->name('bookTour');
Route::put('bookform/{id}',[App\Http\Controllers\PackageController::class,'addBooking']);

Route::get('/bookingDisplay',[PackageController::class,'display2']);

Route::get('/editBooking/{id}',[PackageController::class,'edit2']);
Route::put('/updateBooking/{id}',[PackageController::class,'update2']);

=======



// Route::get('/', function () {
//     return view('home');
// });

 
Route::get("/",[App\Http\Controllers\ViewController::class,'index']);
Route::get('/view',[App\Http\Controllers\ViewController::class, 'viewPackage']);
Route::get("/detail/{id}",[App\Http\Controllers\ViewController::class,'detail']);

// Route::view("home","home");
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
Route::get('/package',[PackageController::class,'index']);
Route::post('/addimage',[PackageController::class,'store'])->name('addimage');

Route::get('/updatePackage',[PackageController::class,'display']);

Route::get('/editimage/{id}',[PackageController::class,'edit']);
Route::put('/updateimage/{id}',[PackageController::class,'update']);

<<<<<<< HEAD
Route::get('/deleteimage/{id}',[PackageController::class,'delete']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
=======
Route::view("dashboard","dashboard");
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e

