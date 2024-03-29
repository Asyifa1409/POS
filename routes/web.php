<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});

Route::get('/', [HomeController::class,'home']);

Route::get('/sales', [SalesController::class,'index']);

Route::get('/user/{halo}/name/{asyifa}', [UserController::class,'profile']);

Route::get('/product', [CategoryController::class,'index']);

Route::get('/product/babykid', [CategoryController::class,'babykid']);

Route::get('/product/beautyhealth', [CategoryController::class,'beautyhealth']);

Route::get('/product/foodBeverage', [CategoryController::class,'foodBeverage']);

Route::get('/product/homecare', [CategoryController::class,'homecare']);