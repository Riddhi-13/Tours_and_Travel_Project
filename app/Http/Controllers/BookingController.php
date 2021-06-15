<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index2()
    {
        return view('bookTour');
    }
   
   
  public function book(Request $req)
    {
        
        
        $booking= new Booking();
        $booking->from=$req->input('from');
        $booking->to=$req->input('to');
        $booking->adults=$req->input('adults');
        $booking->children=$req->input('children');
        $booking->email=$req->input('email');
        $booking->phone=$req->input('phone');
        
     
        $booking->save();
      
        return redirect('/bookTour')->with('message',"Booked successfully",$booking);
    }
     
}