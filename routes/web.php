<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

// Auth
Route::get('login', function () {
    return view('pages.auth.login', [
        'meta' => [
            'showNavbar' => false,
            'showFooter' => false
        ]
    ]);
})->name('login');

// Protected
Route::middleware(['auth.sanctum.cookie'])->group(function () {
    // System
    Route::get('status', function () {
        return true;
    })->name('status');

    // Dashboard
    Route::get('dashboard', function () {
        return view('pages.protected.index');
    })->name('dashboard.index');
});
