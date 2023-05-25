<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

// Admin Guest
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'loginAdmin'])->name('admin.login_authenticate');

Route::middleware('auth')->group(function() {

    // Route Admin
    Route::prefix('admin/')->name('admin.')->group(function() {

        // Dashboard & Logout
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::post('/logout', [LoginController::class, 'logoutAdmin'])->name('logout');
    
        // Kelas
        Route::prefix('kelas/')->name('kelas.')->group(function() {
            Route::get('/', );
        });

    });

});
