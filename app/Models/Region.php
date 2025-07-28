<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [];

    function User()
    {
        return $this->hasMany(User::class);
    }

    public function regionOrdinale()
    {
        return $this->belongsTo(RegionOrdinal::class);
    }

    public function provinces()
    {
        return $this->hasMany(Province::class);
    }
}
