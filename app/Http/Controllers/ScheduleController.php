<?php

namespace App\Http\Controllers;

use App\Models\SomtodayProfile;
use App\Models\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $st_rooster = SomtodayProfile::where('user_id', auth()->user()->id)
                        ->first()
                        ->rooster
                        ->where('id', 1);
        return view('schedule.main')->with('page_id', 'schedule')->with('st_rooster', $st_rooster);
    }
}
