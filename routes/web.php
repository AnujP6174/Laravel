<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\User\Auth\ULoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin')->group(function () {
    Route::namespace('Auth')->middleware('guest', 'backbutton')->group(function () {
        Route::get('admin-login', [LoginController::class, 'index'])->name('login');
        Route::post('admin-login', [LoginController::class, 'login'])->name('admin.login');
    });

    Route::middleware('auth:admin', 'backbutton')->group(function () {
        Route::get('dashboard', [LoginController::class, 'getdashboard'])->name('admin.dashboard');
    });
    Route::get('admin-logout', [LoginController::class, 'adminlogout'])->middleware('backbutton')->name('admin.logout');
});

Route::namespace('User')->group(function () {
    Route::namespace('Auth')->middleware('guest', 'backbutton')->group(function () {
        Route::get('user-login', [ULoginController::class, 'index'])->name('user.logins');
        Route::post('user-login', [ULoginController::class, 'userlogin'])->name('user.login');
    });

    Route::middleware('customauth:user', 'backbutton')->group(function () {
        Route::get('home', [ULoginController::class, 'gethome'])->name('user.home');
    });

    Route::get('user-logout', [ULoginController::class, 'userlogout'])->middleware('backbutton')->name('logout');
});
