<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Package;
use App\Models\User;
use App\Models\Booking;
use App\Models\Payment;
use DB;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('home');
    }elseif(Auth::user()->hasRole('admin')){
        $data1 = DB::table('packages')->count();
        $data2=DB::table('users')->count();
        $data3=DB::table('booking')->count();
        $payment=Payment::all();

        return view('dashboard',compact('data1','data2','data3','payment'));
        }
    
    }
}