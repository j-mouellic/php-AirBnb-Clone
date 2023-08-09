<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
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
Route::get('/login', [AuthentificationController::class, 'showLoginForm'])->middleware('guest')->name("loginForm");
Route::post('/login', [AuthentificationController::class, 'login'])->name("login");
Route::delete('/logout', [AuthentificationController::class, 'logout'])->middleware('auth')->name("logout");

Route::get('dashboard', [UserController::class, 'dashboard'])->middleware('auth')->name("user.dashboard");
Route::get('/newAccount', [UserController::class, 'create'])->name('user.create');
Route::post('/newAccount', [UserController::class, 'store'])->name('user.store');



Route::resource('property', PropertyController::class)->names("property");
