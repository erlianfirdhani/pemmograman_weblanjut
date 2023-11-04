<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErlianController; // Pastikan namespace-nya sesuai
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


Route::get('/', [ErlianController::class, 'movieData'])->name('movieData');
Route::get('/detail/{id}', [ErlianController::class, 'detail'])->name('detail');
Route::get('/watchlist', function () {
    // Define the logic to display the watchlist here
    return view('watchlist');
})->name('watchlist');
