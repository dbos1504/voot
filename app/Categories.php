<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function getRouteKeyName()
    {
        return 'location';
    }

    public function category()
    {
        return $this->hasMany(Subcategories::class)->where('status', 1);
    }

    public function products()
    {
        return $this->hasMany(Product::class)->where('status', 1);
    }
}
