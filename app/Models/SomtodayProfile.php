<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SomtodayProfile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rooster()
    {
        return $this->hasMany(SomtodayRooster::class);
    }

    public function cijfers()
    {
        return $this->hasMany(SomtodayCijfer::class);
    }

    public function absentie()
    {
        return $this->hasMany(SomtodayAbsentie::class);
    }

    public function token()
    {
        return $this->hasOne(SomtodayToken::class);
    }
}
