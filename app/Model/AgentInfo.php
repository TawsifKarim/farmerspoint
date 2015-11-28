
<?php

namespace App\Model;

use App\Model\User;
use App\Model\FarmerPoint;
use Illuminate\Database\Eloquent\Model;

class AgentInfo extends Model
{
    protected $table = "agent_info";
 
    protected $fillable = [ 
        'farmer_point_id',
        'status',
        'user_id'
    ];

    public function user()
    {
          return $this->belongsTo(Users::class);
    }

    public function farmerPoint()
    {
        return $this->belongsTo(FarmerPoint::class);
    }

}