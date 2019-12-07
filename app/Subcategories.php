<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    public function getRouteKeyName()
    {
        return 'location';
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class)->where('status', 1);
    }

    public function about()
    {
        return $this->belongsTo(AboutPages::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class)->where('status', 1);
    }
}
