<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutPages extends Model
{
    public function getRouteKeyName()
    {
        return 'location';
    }

    public function category()
    {
        return $this->hasMany(Subcategories::class)->where('status', 1);
    }
}
