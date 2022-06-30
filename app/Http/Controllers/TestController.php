<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index() {
        // return Hash::make('myPassword');
        // $2y$10$MRZtgZkaslFDXAJLgpy1COReg.WmOIo0qiT/3fy5LYelcsh9bMB3a

        return Hash::check('myPassword', '$2y$10$MRZtgZkaslFDXAJLgpy1COReg.WmOIo0qiT/3fy5LYelcsh9bMB3a');
    }
}
