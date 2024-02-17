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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'who'])->name('who-we-are');
Route::get('/what-we-do', [App\Http\Controllers\HomeController::class, 'what'])->name('what-we-do');
Route::get('/what-we-do/{slung}', [App\Http\Controllers\HomeController::class, 'what_single'])->name('what-we-do-single');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');

Auth::routes();


