<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToFarmerPoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('farmer_point', function (Blueprint $table) {
            $table->string('la')->nullable();
            $table->string('lo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('farmer_point', function (Blueprint $table) {
            $table->string('la');
            $table->string('lo');        
        });
    }
}
