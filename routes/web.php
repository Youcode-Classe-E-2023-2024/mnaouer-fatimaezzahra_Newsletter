<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::get('/', function () {
    return view('home');
//    return "gjh";
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [loginController::class, 'showLogin'])->name('login.show');
Route::post('/login', [loginController::class, 'login'])->name('login');

Route::get('/register', [loginController::class, 'showRegister'])->name('register.show');
Route::post('/register', [loginController::class, 'register'])->name('register');

