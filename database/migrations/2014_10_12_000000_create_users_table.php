<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->string('password', 60)->nullable();
            $table->string('phone');
            $table->text('address');
            $table->string('nid',20);
            $table->timestamp('dob');
            $table->unsignedInteger('user_type_id');
            $table->unsignedInteger('upazila_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('division_id');
            $table->unsignedInteger('farmer_point_id');
            $table->text('remarks');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
