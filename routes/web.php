<?php

use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('back.dashboard');
});


Route::prefix('back')->name("back.")->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});