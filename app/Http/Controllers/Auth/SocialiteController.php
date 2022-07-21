<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\DiscordProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Events\DiscoverEvents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Revolution\Socialite\Discord\DiscordProvider;

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

        // Check if DiscordProfile exists
        if (DiscordProfile::exists($duser->id)) {
            // DiscordProfile exists
            // User exists and it connected
            // TODO: Get user
            $user = DiscordProfile::where('discord_id', $duser->id)->first()->user;
        } else {
            // Check if user with email exists
            if (User::where('email', $duser->email)->exists()) {
                $request->session()->put('discord_data', $duser);
                return redirect('/login/confirm_discord');
            }
            $user = User::create([
                'name' => $duser->name,
                'email' => $duser->email,
                'password' => Hash::make($duser->token),
                'discord_token' => $duser->token,
                'discord_refresh_token' => $duser->refreshToken
            ]);
            DiscordProfile::create([
                'user_id' => $user->id,
                'discord_id' => $duser->id,
                'username' => $duser->nickname,
                'avatar' => $duser->avatar
            ]);
        }

        Auth::login($user, true);
 
        return redirect('/');
    }
}
