<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\API\LoginController;
use App\Http\Controllers\Auth\API\EmailVerificationNotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
});

Route::group(['middleware' => ['auth:sanctum', 'api.verified']], function () {
    Route::prefix('applicant')->group(function () {
        Route::get('/', function () { return response()->json(['success' => true, 'data' => null, 'message' => 'Show applicant successfully.'], 200); });
    });
});
    
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::prefix('auth')->group(function () {
        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store']);
        
        Route::get('logout', [LoginController::class, 'logout']);
    });
});
