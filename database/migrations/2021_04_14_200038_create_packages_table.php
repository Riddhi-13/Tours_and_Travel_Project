<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id')->nullable();
=======
            $table->increments('id');
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
            $table->string('package_name');
            $table->string('package_type');
            $table->string('package_location');
            $table->string('package_price');
            $table->string('package_features');
            $table->longtext('package_details');
            $table->mediumtext('package_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
