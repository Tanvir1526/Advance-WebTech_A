<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/news/all',[NewsApiController::class,'getNews']);
Route::get('/news/{id}',[NewsApiController::class,'getNewsId']);
Route::post('/news/create',[NewsApiController::class,'create']);
Route::put('/news/update/{id}',[NewsApiController::class,'update']);
Route::delete('/news/delete/{id}',[NewsApiController::class,'delete']);
Route::get('/news/search/{Type}',[NewsApiController::class,'getNewsType']);
Route::get('/news/search/{date}',[NewsApiController::class,'getNewsDate']);
Route::get('/news/search/{type}/{date}',[NewsApiController::class,'getNewsTypeDate']);
