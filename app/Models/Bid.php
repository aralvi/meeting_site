<?php

namespace App\Models;

use App\ServiceRequest;
use App\Specialist;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public function srevice_request()
    {
        return $this->belongsTo(ServiceRequest::class);
    }
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
    public function getStatusAttribute($attribute)
    {
        return [
            '0' => 'Declined',
            '1' => 'Approved',
            
        ][$attribute];
    }
}
