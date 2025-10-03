<?php

use Illuminate\Support\Facades\Route;

// Auth
use App\Http\Controllers\AuthController;

// Master Data
use App\Http\Controllers\MasterData\UserController;
use App\Http\Controllers\MasterData\PPDBController;

// Auth
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('master-data')->group(function () {
        Route::apiResource('users', UserController::class)->parameters([
            'users' => 'user'
        ]);
        Route::apiResource('ppdb', PPDBController::class)->parameters([
            'ppdb' => 'ppdb'
        ]);
    });
});
