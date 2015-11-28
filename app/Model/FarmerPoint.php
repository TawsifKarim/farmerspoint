<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FarmerPoint extends Model
{
   protected $table = "farmer_point";

   protected $fillable = ['name',
   						  'phone',
   						  'address',
   						  'upazila_id',
   						  'district_id',
   						  'division_id',
   						  ];
}
