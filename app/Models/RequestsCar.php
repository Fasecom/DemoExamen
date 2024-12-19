<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function requestsCar()
    {
        return $this->belongsTo(RequestsCar::class);
    }
}