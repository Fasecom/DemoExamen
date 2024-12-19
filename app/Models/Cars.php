<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestsCar extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}