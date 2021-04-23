<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        return view('package');
    }
  public function store(Request $req)
    {
        
        $package= new Package();
        $package->package_name=$req->input('package_name');
        $package->package_type=$req->input('package_type');
        $package->package_location=$req->input('package_location');
        $package->package_price=$req->input('package_price');
        $package->package_features=$req->input('package_features');
        $package->package_details=$req->input('package_details');
        
        if($req->hasfile('package_image')){
            $file=$req->file('package_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/package/',$filename);
            $package->package_image=$filename;
        }else{
            return $req;
            $package->package_image = '';
        }
        
        
        $package->save();
        return view('/package')->with('package',$package);


    }
       
        
       
        
    
}
