<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['name'];
}

// public function readings()
// {
//     return $this->hasMany(SensorReading::class);
// }
