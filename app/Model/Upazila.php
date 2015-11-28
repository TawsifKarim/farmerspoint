<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $table = "upazila";

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
