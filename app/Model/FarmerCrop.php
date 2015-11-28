<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class FarmerCrop extends Model
{
    protected $table = "farmer_crop";

    protected  $fillable = [
        'user_id',
		'crop_id',
		'land_location',
		'area_of_cultivation',
		'harvest_start_date',
		'harvest_end_date',
		'expected_amount',
		'status',
		'remarks'
    ];

    public function crop()
    {
		return $this->belongsTo(Crop::class);
	}

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
