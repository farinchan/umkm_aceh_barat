<?php

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('back')->name("back.")->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});