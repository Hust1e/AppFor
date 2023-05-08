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
Route::get('/company', [\App\Http\Controllers\SiteController::class, 'company']);

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'store']);
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/events', [\App\Http\Controllers\DashboardController::class, 'events'])->middleware('auth');


Route::post('/request', [\App\Http\Controllers\RequestController::class, 'store'])->name('request.store');
Route::delete('/request/{request}', [\App\Http\Controllers\RequestController::class, 'delete'])->name('request.delete')->middleware('auth');

Route::get('/comment/{event}/', [\App\Http\Controllers\Comment\CommentController::class, 'store'])->name('comment.store');

Route::get('/events/', \App\Http\Controllers\Event\IndexController::class)->name('event.index');
Route::get('/events/create', \App\Http\Controllers\Event\CreateController::class)->name('event.create')->middleware('auth');
Route::post('/events', \App\Http\Controllers\Event\StoreController::class)->name('event.store')->middleware('auth');
Route::get('/{event}/edit', \App\Http\Controllers\Event\EditController::class)->name('event.edit')->middleware('auth');
Route::get('/events/{event}', \App\Http\Controllers\Event\ShowController::class)->name('event.show');
Route::patch('/events/{event}', \App\Http\Controllers\Event\UpdateController::class)->name('event.update')->middleware('auth');
Route::delete('/events/{event}', \App\Http\Controllers\Event\DestroyController::class)->name('event.delete')->middleware('auth');
