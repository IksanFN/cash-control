<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Siswa\DashboardController as SiswaDashboardController;
use App\Http\Controllers\Siswa\LoginController as SiswaLoginController;
use Illuminate\Support\Facades\Route;

// Siswa Guest
Route::get('/login', [SiswaLoginController::class, 'index'])->name('login');
Route::post('/login', [SiswaLoginController::class, 'authenticate'])->name('authenticate');

// Admin Guest
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'loginAdmin'])->name('admin.login_authenticate');

Route::middleware('auth')->group(function() {

    // Route Admin
    Route::prefix('admin/')->middleware('role:admin')->name('admin.')->group(function() {

        // Dashboard & Logout
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::post('/logout', [LoginController::class, 'logoutAdmin'])->name('logout');
    
        // Kelas
        Route::prefix('kelas/')->name('kelas.')->group(function() {
            Route::get('/', [KelasController::class, 'index'])->name('index');
            Route::post('/', [KelasController::class, 'store'])->name('store');
            Route::get('edit/{kelas}', [KelasController::class, 'edit'])->name('edit');
            Route::put('edit/{kelas}', [KelasController::class, 'update'])->name('update');
            Route::delete('delete/{kelas}', [KelasController::class, 'destroy'])->name('destroy');
        });

    });

    Route::prefix('siswa/')->middleware('role:siswa')->name('siswa.')->group(function() {

        // Dashboard & Logout
        Route::get('/dashboard', SiswaDashboardController::class)->name('dashboard');
        Route::post('/logout', [SiswaLoginController::class, 'logoutSiswa'])->name('logout');


    });

});
