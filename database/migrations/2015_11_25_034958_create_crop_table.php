<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('crop_type_id');
            $table->string('harvest_season');
            $table->text('harvest_locations');
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
        Schema::drop('crop');
    }
}
