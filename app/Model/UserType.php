<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
   protected $table ="user_type";

   protected $fillable = ['name'];

   public function user()
   {
   		return $this->hasMany(User::class);
   }

}
