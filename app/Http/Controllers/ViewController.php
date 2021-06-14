<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class ViewController extends Controller
{
    public function index(){
        $packages = Package::offset(0)->limit(3)->get();
       return view('home',['packages' => $packages]);
   }

   
   public function viewPackage(){
    $packages = Package::all();

    return view('view',['packages' => $packages]);
}


public function detail($id){

<<<<<<< HEAD
    
=======
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
    $data = Package::find($id);

    return view('detail',['packages'=>$data]);
    
}
<<<<<<< HEAD

=======
    
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
}
