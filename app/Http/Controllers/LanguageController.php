<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function set(Request $request, $lang)
    {
        $request->session()->put('lang', $lang);

        return back();
    }
}
