<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event;
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
Route::get('/dashboard/events', [\App\Http\Controllers\DashboardController::class, 'events']);


Route::get('/events/', \App\Http\Controllers\Event\IndexController::class)->name('event.index');
Route::get('/events/create', \App\Http\Controllers\Event\CreateController::class)->name('event.create');
Route::post('/events', \App\Http\Controllers\Event\StoreController::class)->name('event.store');
Route::get('/{event}/edit', \App\Http\Controllers\Event\EditController::class)->name('event.edit');
Route::get('/events/{event}', \App\Http\Controllers\Event\ShowController::class)->name('event.show');
Route::patch('/events/{event}', \App\Http\Controllers\Event\UpdateController::class)->name('event.update');
Route::delete('/events/{event}', \App\Http\Controllers\Event\DestroyController::class)->name('event.delete');
