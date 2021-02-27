<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'user_id','business_phone','business_name','business_location','opening_hours','category_id','sub_category_id',
    ];
}
