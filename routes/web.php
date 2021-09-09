<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;
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



Route::get('/',[newsController::class,'index']);
Route::get('/blog/create',[newsController::class,'create']);
Route::post('/blog/sorte',[newsController::class,'sorte']);
Route::get('/blog/{id}/save',[newsController::class,'save']);
Route::delete('/blog/{id}',[newsController::class,'destroy']);