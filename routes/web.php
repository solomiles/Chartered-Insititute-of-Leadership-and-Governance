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
//all admin routes
Route::prefix('admin')->group(function () {

    // Login Admin
    Route::post('login-in', [App\Http\Controllers\Admins\AuthController::class, 'login']);

    // Login Page
    Route::get('/login', function () {
    
        return view('authentication-signin');
    });

    /* PROTECTED */
    Route::group(['middleware' => ['auth']], function () {
        //logout Admin
        Route::get('logout', [App\Http\Controllers\Admins\AuthController::class, 'logout']);
        // Dashboard
        Route::get('dashboard', [App\Http\Controllers\Admins\AdminController::class, 'dashboard']);
        // Diploma
        Route::get('diploma', [App\Http\Controllers\Admins\AdminController::class, 'diploma']);
        // Membership
        Route::get('membership', [App\Http\Controllers\Admins\AdminController::class, 'membership']);
        // Delete Diploma
        Route::get('diploma/delete/{id}', [App\Http\Controllers\Admins\AdminController::class, 'deleteDiploma']);
        // Delete Membership
        Route::get('membership/delete/{id}', [App\Http\Controllers\Admins\AdminController::class, 'deleteMembership']);
    });
});

Route::get('/', function () {
    
    return view('application-portal');
});

Route::post('membership-form', [\App\Http\Controllers\MembershipController::class, 'create']);

Route::post('diploma-form', [\App\Http\Controllers\DiplomaController::class, 'create']);

