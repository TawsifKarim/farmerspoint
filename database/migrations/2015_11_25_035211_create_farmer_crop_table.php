<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerCropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_crop', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('farmer_id');
            $table->unsignedInteger('crop_id');
            $table->string('land_location');
            $table->string('area_of_cultivation');
            $table->string('expected_amount');
            $table->timestamp('harvest_start_date');
            $table->timestamp('harvest_end_date');
            $table->boolean('status');
            $table->text('remarks');
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
        Schema::drop('farmer_crop');
    }
}
