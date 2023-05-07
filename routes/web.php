<?php

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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);
Route::post('/', [\App\Http\Controllers\SiteController::class, 'store']);
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'store']);
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
