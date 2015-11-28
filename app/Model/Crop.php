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

}
