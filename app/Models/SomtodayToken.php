<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SomtodayToken extends Model
{
    use HasFactory;

    public function profile()
    {
        return $this->belongsTo(SomtodayProfile::class);
    }
}
