<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

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

Route::group(['middleware'=>['auth']],function() {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/package',[PackageController::class,'index']);
Route::post('/addimage',[PackageController::class,'store'])->name('addimage');

Route::get('/updatePackage',[PackageController::class,'display']);

Route::get('/editimage/{id}',[PackageController::class,'edit']);
Route::put('/updateimage/{id}',[PackageController::class,'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
