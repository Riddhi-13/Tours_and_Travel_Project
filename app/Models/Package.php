<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table='packages';
    protected $fillable=['package_name','package_type','package_location','package_price','package_features','package_details','package_image'];
    
<<<<<<< HEAD
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
=======
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
}
