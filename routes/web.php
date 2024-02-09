<?php

use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('password.email');
Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store'])->name('password.request');
Route::post('/forgot-password/{token}', [ForgotPasswordLinkController::class, 'reset'])->name('password.reset');
