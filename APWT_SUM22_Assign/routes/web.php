<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

Route::get('/',[userController::class,'welcome'])->name('welcome');
Route::get('/login',[userController::class,'login'])->name('login');
Route::post('/login/submit',[userController::class,'logSubmit'])->name('logSubmit');
Route::get('/register',[userController::class,'registration'])->name('registration');
Route::post('/register/submit',[userController::class,'regSubmit'])->name('regSubmit');
Route::get('/Admin/Dashborad',[userController::class,'admindashboard'])->name('admin.dashboard');
Route::get('/user/Dashborad',[userController::class,'userdashboard'])->name('user.dashboard');
Route::get('/user/details/{id}', [userController::class, 'details'])->name('user.details');

