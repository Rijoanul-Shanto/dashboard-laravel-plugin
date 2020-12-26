<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get('/dashboard', [Shanto\Dashboard\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/users', [Shanto\Dashboard\Http\Controllers\DashboardController::class, 'users'])->name('dashboard.users');

    Route::get('/dashboard/posts', [Shanto\Dashboard\Http\Controllers\DashboardController::class, 'posts'])->name('dashboard.posts');
});
