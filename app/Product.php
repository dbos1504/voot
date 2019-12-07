<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $with = ['images'];

    public function getRouteKeyName()
    {
        return 'location';
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategories::class)->where('status', 1);
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }

}
