<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function discordLogin() {
        return Socialite::driver('discord')->redirect();
    }

    public function discordLoginCallback() {
        $user = Socialite::driver('discord')->user();
        // FIXME: Add user logic
        // if (User::where('email', '=', $user->email)->exists()) {
        //     dd('User exists');
        // } else {
        //     dd('User does not exist');
        // }
        // TODO: Remove dd()
        dd($user);
    }
}
