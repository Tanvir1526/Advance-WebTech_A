<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
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



Route::get('/',[productController::class,'CreateProduct'])->name('CreateProduct');
Route::post('/create',[productController::class,'Createsubmit'])->name('Create');
Route::get('/ProductList',[productController::class,'ProductList'])->name('ProductList');
Route::get('/ProductDetails',[productController::class,'ProductDetails'])->name('ProductDetails');