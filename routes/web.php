<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\EditAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Test routes
Route::get('/test', [TestController::class, 'index']);
Route::get('/setlang/{lang}', [LanguageController::class, 'set'])->name('setlanguage');


//Main routes
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');



// Authentication routes
Route::get('/login/discord', [SocialiteController::class, 'discordLogin'])->name('discordLogin');
Route::get('/login/discord/callback', [SocialiteController::class, 'discordLoginCallback']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'post']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'post']);

Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/account/edit', [EditAccountController::class, 'index'])->name('account.edit');

Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
