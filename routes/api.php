<?php

use Illuminate\Support\Facades\Route;

// Auth
use App\Http\Controllers\AuthController;

// Master Data
use App\Http\Controllers\MasterData\UserController;
use App\Http\Controllers\MasterData\PPDBController;
use App\Http\Controllers\MasterData\NewsController;
use App\Http\Controllers\MasterData\EventsController;
use App\Http\Controllers\MasterData\PublicationsController;

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
        Route::apiResource('news', NewsController::class)->parameters([
            'news' => 'news'
        ]);
        Route::apiResource('events', EventsController::class)->parameters([
            'events' => 'event'
        ]);
        Route::apiResource('publications', PublicationsController::class)->parameters([
            'publications' => 'publication'
        ]);
    });
});
