<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function store(Request $req)
    {
        if ($req->hasFile('file')) {
            $req->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
             // Save the file locally in the storage/public/ folder under a new folder named /product
             $req->file->store('package', 'public');
        $package= new Package([
            "package_name" => $req->get('package_name'),
            "package_type" => $req->get('package_type'),
            "package_location" => $req->get('package_location'),
            "package_price" => $req->get('package_price'),
            "package_features" => $req->get('package_features'),
            "package_details" => $req->get('package_details'),
            "package_image" => $req->file->hashName()
          
        ]);
       
       
            $package->save(); // Finally, save the record.
        }

        return redirect('create');


    }
       
        
       
        
    
}
