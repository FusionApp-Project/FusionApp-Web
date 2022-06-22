<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/setlang/{lang}', [LanguageController::class, 'set'])->name('setlanguage');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware();

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'post']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'post']);

Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/account/edit', [EditAccountController::class, 'index'])->name('account.edit');

Route::get('/logout', [AccountController::class, 'logout'])->name('logout');