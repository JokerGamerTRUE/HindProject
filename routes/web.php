<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/over', [HomeController::class, 'over'])->name('over');
