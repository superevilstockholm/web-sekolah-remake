<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterData\UserController;

// Auth
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('master-data')->group(function () {
        Route::apiResource('users', UserController::class)->parameters([
            'users' => 'user'
        ]);
    });
});
