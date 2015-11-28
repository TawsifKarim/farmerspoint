<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Crop;

class CropType extends Model
{
    protected $table = "crop_type";
    
    protected $fillable = ['name'];

    public function crop()
    {
		return $this->hasMany(Crop::class);
	}

}
