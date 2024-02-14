<?php

use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\subscriberController;
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

Route::get('/', function () {return view('home');});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::get('/logout', [LogoutController::class, 'destroy'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store'])->name('password');
Route::get('/forgot-password/{token}', [ForgotPasswordLinkController::class, 'resetform'])->name('password.reset');
Route::post('/forgot-password/', [ForgotPasswordLinkController::class, 'reset'])->name('password.update');

Route::get('/mediaForm', [MediaController::class, 'index'])->name('show.form.media');
Route::post('/media' ,[MediaController::class, 'store'])->name('create.media');

Route::get('/table' ,[MediaController::class, 'show'])->name('show.table.media')->middleware('auth');

Route::delete('/delete/{id}' , [MediaController::class, 'destroy'])->name('delete.media');

Route::post('/home' ,[subscriberController::class, 'addSubscriber'])->name('add_subscriber');

Route::post('/unsubscribe' ,[subscriberController::class, 'unsubscribe'])->name('unsubscribe');

    Route::get('/dashboard' ,[subscriberController::class, 'showDashboard'])->name('show.dashboard');


