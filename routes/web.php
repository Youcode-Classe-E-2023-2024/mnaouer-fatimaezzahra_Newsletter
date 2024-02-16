<?php

use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\subscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

Route::get('/dashboard' ,[DashboardController::class, 'showDashboard'])->name('show.dashboard');

Route::get('/listeUser' ,[DashboardController::class, 'ListeUser'])->name('show.users');

Route::get('/listeSubscriber' ,[DashboardController::class, 'ListeSub'])->name('show.subscriber');

Route::get('/dashboard', [subscriberController::class,'showSubscriberStatistics'])->name('showSubscriberStatistics');


//create role and permission and assign permission to role
//Route::get('/fati', function () {
//
//    //create role
//    $AdminRole=Role::create(['name'=>'admin']);
//
//    $userRole=Role::create(['name'=>'user']);
//
//    $guestRole=Role::create(['name'=>'guest']);
//
//    //create permission
//    $AssignRole=Permission::create(['name'=>'Assign Role']);
//    $Telechargepdf=Permission::create(['name'=>'Telecharge pdf']);
//
//    $Add_temp=Permission::create(['name'=>'add template']);
//    $Edit_temp=Permission::create(['name'=>'edit template']);
//    $Soft_Delete_temp=Permission::create(['name'=>'soft delete template']);
//    $Send_temp_to_email=Permission::create(['name'=>'send template']);
//
////    Assign permission to a role
//    $AdminRole->givePermissionTo($AssignRole);
//    $AdminRole->givePermissionTo($Telechargepdf);
//
//    $userRole->givePermissionTo($Add_temp);
//    $userRole->givePermissionTo($Edit_temp);
//    $userRole->givePermissionTo($Soft_Delete_temp);
//    $userRole->givePermissionTo($Send_temp_to_email);
//
//
//
//
//    return 'salut';
//});


Route::get('/dashboard/{user}', [DashboardController::class,'selectRole'])->name('selectRole');
Route::post('/dashboard', [DashboardController::class,'assign_Role'])->name('assign_role');



