<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::prefix('admin/')->name('admin.')->group(function() {
    Route::prefix('kelas')->group(function() {
        Route::get('/', function() {
            return view('admin.kelas.index');
        });
    });
});
