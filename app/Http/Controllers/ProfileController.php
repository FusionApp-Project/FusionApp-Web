<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('profile')->with('page_id', 'profile');
    }

    public function post(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->language = $request->lang;
        $user->save();

        session()->put('lang', $request->lang);
        
        return back()->with('message', trans('profile.saved_message'));
    }
}
