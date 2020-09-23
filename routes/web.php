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

    Route::post('/auth.verify_coded', [AuthController::class, 'verify_coded'])->name('coded.verify');
});

Auth::Routes();
