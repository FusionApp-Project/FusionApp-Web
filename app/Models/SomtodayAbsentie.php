<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SomtodayAbsentie extends Model
{
    use HasFactory;

    public function leerling()
    {
        return $this->belongsTo(SomtodayProfile::class);
    }
}
