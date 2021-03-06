<?php

namespace App;

use App\Model\Upazila;
use App\Model\District;
use App\Model\Division;
use App\Model\UserType;
use App\Model\FarmerPoint;
use App\Model\FarmerCrop;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'nid',
        'dob',
        'remarks',
        'division_id',
        'district_id',
        'upazila_id',
        'user_type_id',
        'farmer_point_id'
    ];

    protected $dates = [
        'dob'

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

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

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function farmerPoint(){
        return $this->belongsTo(FarmerPoint::class);
    }

    public function farmerCrop(){
        return $this->hasMany(FarmerCrop::class);
    }

public function getFarmerAttribute()
    {
        if(file_exists(public_path("uploads/Farmers/farmer_{$this->id}.jpg"))){
            return url("uploads/Farmers/farmer_{$this->id}.jpg");
        }
        return url("img/profile1.jpg");
    }

public function getAgentAttribute()
    {
        if(file_exists(public_path("uploads/Agents/agent_{$this->id}.jpg"))){
            return url("uploads/Agents/agent_{$this->id}.jpg");
        }
        return url("img/profile1.jpg");
    }



}
