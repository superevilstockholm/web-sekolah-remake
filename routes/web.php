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

// Tentang Kami
Route::prefix('tentang-kami')->group(function () {
    Route::get('sejarah', function () {
        return view('pages.tentang-kami.sejarah');
    })->name('tentang-kami.sejarah');
    Route::get('visi-dan-misi', function () {
        return view('pages.tentang-kami.visi-dan-misi');
    })->name('tentang-kami.visi-dan-misi');
    Route::get('faq', function () {
        return view('pages.tentang-kami.faq');
    })->name('tentang-kami.faq');
})->name('tentang-kami');

// Pembelajaran
Route::prefix('pembelajaran')->group(function () {
    Route::get('jalur-pembelajaran', function () {
        return view('pages.pembelajaran.jalur-pembelajaran');
    })->name('pembelajaran.jalur-pembelajaran');
    Route::get('program', function () {
        return view('pages.pembelajaran.program');
    })->name('pembelajaran.program');
    Route::get('kurikulum', function () {
        return view('pages.pembelajaran.kurikulum');
    })->name('pembelajaran.kurikulum');
    Route::get('dukungan-pembelajaran', function () {
        return view('pages.pembelajaran.dukungan-pembelajaran');
    })->name('pembelajaran.dukungan-pembelajaran');
    Route::get('pembelajaran-pelayanan', function () {
        return view('pages.pembelajaran.pembelajaran-pelayanan');
    })->name('pembelajaran.pembelajaran-pelayanan');
})->name('pembelajaran');

// Protected
Route::middleware(['auth.sanctum.cookie'])->group(function () {
    // Auth
    Route::get('status', function () {
        return true;
    })->name('status');

    // Dashboard
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function () {
            return view('pages.protected.dashboard');
        })->name('dashboard.index');

        // Master Data
        Route::prefix('master-data')->group(function () {
            Route::get('users', function () {
                return view('pages.protected.master-data.users');
            })->name('master-data.users');
            Route::get('ppdb', function () {
                return view('pages.protected.master-data.ppdb');
            })->name('master-data.ppdb');
            Route::get('news', function () {
                return view('pages.protected.master-data.news');
            })->name('master-data.news');
            Route::get('events', function () {
                return view('pages.protected.master-data.events');
            })->name('master-data.events');
            Route::get('blogs', function () {
                return view('pages.protected.master-data.blogs');
            })->name('master-data.blogs');
            Route::get('publications', function () {
                return view('pages.protected.master-data.publications');
            })->name('master-data.publications');
        })->name('master-data');

        // Settings
        Route::prefix('settings')->group(function () {
            Route::get('logs', function () {
                return view('pages.protected.settings.logs');
            })->name('settings.logs');
        })->name('settings');
    })->name('dashboard');
});
