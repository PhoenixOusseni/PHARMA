<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionOrdinal extends Model
{
    protected $guarded = [];

    function User()
    {
        return $this->hasMany(User::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}
