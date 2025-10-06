<?php

use Illuminate\Support\Facades\Route;

// Global Controllers
use App\Http\Controllers\GlobalController;

// Auth
use App\Http\Controllers\AuthController;

// Master Data
use App\Http\Controllers\MasterData\UserController;
use App\Http\Controllers\MasterData\PPDBController;
use App\Http\Controllers\MasterData\NewsController;
use App\Http\Controllers\MasterData\EventsController;
use App\Http\Controllers\MasterData\PublicationsController;
use App\Http\Controllers\MasterData\BlogsController;

// Settings
use App\Http\Controllers\Settings\LogsController;

// Other
use App\Http\Controllers\DashboardController;

// Auth
Route::post('login', [AuthController::class, 'login']);

// Master Data
Route::middleware(['optional.auth'])->group(function () {
    Route::prefix('master-data')->group(function () {
        Route::apiResource('news', NewsController::class)->parameters([
            'news' => 'news'
        ])->only(['index', 'show']);
        Route::apiResource('events', EventsController::class)->parameters([
            'events' => 'event'
        ])->only(['index', 'show']);
        Route::apiResource('publications', PublicationsController::class)->parameters([
            'publications' => 'publication'
        ])->only(['index', 'show']);
        Route::apiResource('blogs', BlogsController::class)->parameters([
            'blogs' => 'blog'
        ])->only(['index', 'show']);

        // Limitter
        Route::middleware(['throttle:5,1'])->group(function () {
            Route::apiResource('ppdb', PPDBController::class)->parameters([
                'ppdb' => 'ppdb'
            ])->only(['store']);
        });
    });
});

Route::middleware(['auth:sanctum'])->group(function () {
    // Auth
    Route::get('status', function () {
        return true;
    })->name('status');
    Route::get('logout', [AuthController::class, 'logout']);

    // Global uploads image for CKEditor
    Route::post('upload-image', [GlobalController::class, 'uploadImage']);

    // Logger middleware
    Route::middleware(['logger'])->group(function () {
        // Master Data
        Route::prefix('master-data')->group(function () {
            Route::apiResource('users', UserController::class)->parameters([
                'users' => 'user'
            ]);
            Route::apiResource('ppdb', PPDBController::class)->parameters([
                'ppdb' => 'ppdb'
            ])->only(['index', 'show', 'update', 'destroy']);
            Route::apiResource('news', NewsController::class)->parameters([
                'news' => 'news'
            ])->only(['store', 'update', 'destroy']);
            Route::apiResource('events', EventsController::class)->parameters([
                'events' => 'event'
            ])->only(['store', 'update', 'destroy']);
            Route::apiResource('publications', PublicationsController::class)->parameters([
                'publications' => 'publication'
            ])->only(['store', 'update', 'destroy']);
            Route::apiResource('blogs', BlogsController::class)->parameters([
                'blogs' => 'blog'
            ])->only(['store', 'update', 'destroy']);
        });

        // Settings
        Route::prefix('settings')->group(function () {
            Route::apiResource('logs', LogsController::class)->parameters([
                'logs' => 'log'
            ])->only(['index', 'show']);
        });
    });

    // Dashboard
    Route::prefix('dashboard')->group(function () {
        Route::get('statistics', [DashboardController::class, 'getDashboardStatistics']);
    });
});
