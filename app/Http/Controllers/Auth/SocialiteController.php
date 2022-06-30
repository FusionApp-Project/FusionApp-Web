<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function discordLogin() {
        return Socialite::driver('discord')->redirect();
    }

    public function discordLoginCallback(Request $request) {
        if ($request->query('error') == "access_denied") {
            return redirect('/login')->with('error', 'discord_error');
        }

        $duser = Socialite::driver('discord')->user();

        $user = User::updateOrCreate([
            'discord_id' => $duser->id,
        ], [
            'name' => $duser->name,
            'email' => $duser->email,
            'avatar' => $duser->avatar,
            'password' => Hash::make($duser->id),
        ]);

        Auth::login($user);
 
        return redirect('/');
    }
}
