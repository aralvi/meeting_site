<?php

namespace App\Models\Specialists;

use App\Category;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
