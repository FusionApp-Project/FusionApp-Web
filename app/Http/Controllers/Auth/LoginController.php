<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Models\DiscordProfile;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function confirm_discord()
    {
        if (session('discord_data')) return view('auth.login')->with('message', 'discord_auth');
        return redirect('/login');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('error', 'incorrect_login_details');
        }
        
        if (session('discord_data')) {
            $duser = session()->get('discord_data');
            $user_id = auth()->user()->id;
            DiscordProfile::create([
                'user_id' => $user_id,
                'discord_id' => $duser->id,
                'username' => $duser->nickname,
                'avatar' => $duser->avatar
            ]);
            $user = User::find($user_id);
            $user->discord_token = $duser->token;
            $user->discord_refresh_token = $duser->refreshToken;
            $user->save();
            session()->remove('discord_data');
        }

        $request->session()->put('lang', auth()->user()->language);

        return back();
    }
}
