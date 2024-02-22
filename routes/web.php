<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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

Route::prefix('category')->group(function () {
    Route::get('/food-beverages', [CategoryController::class, 'food']);
    Route::get('/beauty-health', [CategoryController::class, 'beauty']);
    Route::get('/baby-kid', [CategoryController::class, 'baby']);
    Route::get('/home-care', [CategoryController::class, 'home']);
    });

Route::get('user/id/{id}/name/{name}', [UserController::class, 'name']);

Route::get('/sales', [SalesController::class, 'salesIndex']);

        