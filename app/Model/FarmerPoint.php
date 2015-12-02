<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\User;

class FarmerPoint extends Model
{
    protected $table = "farmer_point";

    protected $fillable = [
        'name',
        'phone',
        'address',
        'upazila_id',
        'district_id',
        'division_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function upazila()
    {
        return $this->belongsTo(upazila::class);
    }

    public function agent()
    {
        return $this->hasMany(AgentInfo::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }

}
