<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class,'home']);

Route::prefix('/products')->group(function(){
    Route::get('/category/foodBeverage', [ProductController::class, 'foodBeverage']);
    Route::get('/category/beautyHealth', [ProductController::class, 'beautyHealth']);
    Route::get('/category/homeCare', [ProductController::class, 'homeCare']);
    Route::get('/category/babyKid', [ProductController::class, 'babyKid']);

});