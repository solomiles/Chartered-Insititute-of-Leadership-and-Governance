<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('admin')->group(function () {
    // Register
    // Route::post('register', [App\Http\Controllers\Clients\AuthController::class, 'register']);
    // // Login
    // Route::post('login', [App\Http\Controllers\Clients\AuthController::class, 'login']);
    // // Forgot password Email
    // Route::post('forgot-password', [App\Http\Controllers\Clients\AuthController::class, 'sendPasswordResetEmail']);

    // // Reset password
    // Route::post('reset-password', [App\Http\Controllers\Clients\AuthController::class, 'resetPassword']);
    // // Verify Email Code
    // Route::post('verify-email-code', [App\Http\Controllers\Clients\AuthController::class, 'verifyCode']);
    // // Resend Email code
    // Route::post('resend-email-code', [App\Http\Controllers\Clients\AuthController::class, 'resendVerificationCode']);
});
Route::get('/', function () {
    
    return view('application-portal');
});

Route::post('membership-form', [\App\Http\Controllers\MembershipController::class, 'create']);

Route::post('diploma-form', [\App\Http\Controllers\DiplomaController::class, 'create']);

