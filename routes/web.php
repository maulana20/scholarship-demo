<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Admin\LoginController as AdminLoginController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function () { return view('admin.index'); })->name('admin.index');
    });
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login-form');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});

Auth::routes();

Route::group(['middleware' => 'auth:applicant'], function () {
    Route::prefix('applicant')->group(function () {
        Route::get('/', function () { return view('applicant.index'); })->name('applicant.index');
    });
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

