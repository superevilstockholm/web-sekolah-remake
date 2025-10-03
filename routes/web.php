<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth.sanctum.cookie'])->group(function () {
    Route::get('status', function () {
        return true;
    });
});
