<?php

use App\Http\Controllers\DashboardAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/login', [DashboardAuthController::class, 'create'])->name('login');
Route::post('/login', [DashboardAuthController::class, 'store'])->name('login.store');
Route::post('/logout', [DashboardAuthController::class, 'destroy'])->name('logout');

Route::middleware('dashboard.auth')->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::post('/dashboard/homepage', [HomepageContentController::class, 'update'])->name('dashboard.homepage.update');
});
