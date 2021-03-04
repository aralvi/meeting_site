<?php

namespace App\Models;

use App\Client;
use App\Models\Specialists\Service;
use App\Specialist;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
    public function getStatusAttribute($attribute)
    {
        return [
            '0' => 'Pending',
            '1' => 'Approved',
            '2' => 'Cancelled',
            '3' => 'Cancelled'
        ][$attribute];
    }
}
