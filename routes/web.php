<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/products' , [ProductController::class, 'index']);
Route::get('/search' , [ProductController::class, 'search']);
Route::get('/product/{id}' , [ProductController::class, 'show']);
Route::get('/create' , [ProductController::class, 'create']);
Route::post('/store' , [ProductController::class, 'store']);
Route::get('/edit/{id}' , [ProductController::class, 'edit']);
Route::post('/update/{id}' , [ProductController::class, 'update']);
Route::get('/destroy/{id}' , [ProductController::class, 'destroy']);