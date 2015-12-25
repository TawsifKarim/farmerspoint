<?php

namespace App\Model;

use App\User;
use App\Model\Upazila;
use Illuminate\Database\Eloquent\Model;

class FarmerCrop extends Model
{
    protected $table = "farmer_crop";

    protected $dates = [
        'harvest_start_date',
        'harvest_end_date'
    ];

    protected  $fillable = [
        'user_id',
		'crop_id',
		'land_location',
		'area_of_cultivation',
		'harvest_start_date',
		'harvest_end_date',
		'expected_amount',
		'status',
        'price',
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

    public function landLocation()
    {
        return $this->belongsTo(Upazila::class, 'land_location');
    }

}
