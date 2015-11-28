<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "district";

    public function division(){
		return $this->belongsTo(Division::class);
	}
}
