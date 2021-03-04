<?php

namespace App;

use App\Models\Appointment;
use App\Models\Specialists\Service;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'user_id','business_phone','business_name','business_location','opening_hours','category_id','sub_category_id',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
