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

Route::namespace('Admin')->middleware('backbutton')->group(function () {
    Route::namespace('Auth')->middleware('guest')->group(function () {
        Route::get('admin-login', [LoginController::class, 'index'])->name('login');
        Route::post('admin-login', [LoginController::class, 'login'])->name('admin.login');
        Route::get('admin-logout', [LoginController::class, 'adminLogout'])->withoutmiddleware('guest')->name('admin.logout');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [LoginController::class, 'getDashboard'])->name('admin.dashboard');
    });
});

Route::namespace('User')->middleware('guest')->group(function () {
    Route::namespace('Auth')->middleware('guest')->group(function () {
        Route::get('user-login', [ULoginController::class, 'index'])->name('user.logins');
        Route::post('user-login', [ULoginController::class, 'userLogin'])->name('user.login');
        Route::get('user-logout', [ULoginController::class, 'userLogout'])->withoutMiddleware('guest')->name('logout');
    });

    Route::middleware('customauth')->group(function () {
        Route::get('home', [ULoginController::class, 'getHome'])->name('user.home');
    });
});
