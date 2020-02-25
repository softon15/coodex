<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function owner()
    {
        return $this->belongsTo(\App\Owner::class, 'owner_id');
    }
}
