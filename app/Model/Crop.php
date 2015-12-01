<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\CropType;

class Crop extends Model
{
    protected $table = "crop";

    protected $fillable = [
	    'name',
		'crop_type_id',
		'harvest_season',
		'harvest_locations'
	];

	public function cropType()
	{
		return $this->belongsTo(CropType::class);
	}

	public function getCropAttribute()
    {
        if(file_exists(public_path("uploads/Crops/crop_{$this->id}.jpg"))){
            return url("uploads/Crops/crop_{$this->id}.jpg");
        }
        return url("img/profile1.jpg");
    }

}
