<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::name('auth.')->group(function(){
    Route::get('/auth', [AuthController::class, 'index'] )->name('home');
    Route::get('/auth/register', [AuthController::class, 'show_register_form'])->name('register');
    Route::get('/auth/verify_coded', [AuthController::class, 'show_verify_coded'])->name('verify.coded');

    Route::post('/auth/verify_coded', [AuthController::class, 'verify_coded'])->name('coded.verify');
    Route::post('/send_registration_code', [AuthController::class, 'send_registration_code'])->name('registration_code_send');

    Route::post('/auth/registration/confirmation', [AuthController::class, 'confirmation'])->name('registration.confirmation');


    // Edit Register data and Confirm Register data.
    Route::get('/auth/confirm_register/{data?}', [AuthController::class, 'confirmed_register'])->name('confirmed.register');
    Route::get('/auth/edit_register', [AuthController::class, 'edited_register'])->name('edited.register');

});

Auth::Routes();
