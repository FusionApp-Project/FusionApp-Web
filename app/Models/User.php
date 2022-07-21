<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'discord_token',
        'discord_refresh_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'discord_token',
        'discord_refresh_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function discord_profile()
    {
        return $this->hasOne(DiscordProfile::class, 'user_id', 'id');
    }

    public function somtoday_profile()
    {
        return $this->hasOne(SomTodayProfile::class);
    }

    public function getAvatar()
    {
        if (empty($this->avatar))
        {
            $hash = md5(strtolower(trim($this->email)));
            return "https://www.gravatar.com/avatar/".$hash."?d=mp";
        }
        return $this->avatar;
    }
}
