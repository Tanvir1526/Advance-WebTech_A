<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class, 'Home'])->name('Page.landingPage');
Route::get('/page.about', [ProductController::class, 'About'])->name('Page.about');
Route::get('/page.contact', [ProductController::class, 'Contact'])->name('Page.contact');
Route::get('/products.service', [ProductController::class, 'List'])->name('Products.service');
Route::get('/products.teams/{id}/{name}', [ProductController::class, 'teams'])->name('Products.teams');

