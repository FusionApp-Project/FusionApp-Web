<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscordProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'discord_id',
        'username',
        'avatar'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
