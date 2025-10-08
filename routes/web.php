<?php

use App\Http\Controllers\MasterData\NewsController;
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

// PPDB
Route::prefix('ppdb')->group(function () {
    Route::get('persyaratan', function () {
        return view('pages.ppdb.persyaratan');
    })->name('ppdb.persyaratan');
    Route::get('pendaftaran', function () {
        return view('pages.ppdb.pendaftaran');
    })->name('ppdb.pendaftaran');
})->name('ppdb');

// Kehidupan Siswa
Route::prefix('kehidupan-siswa')->group(function () {
    Route::get('ekstrakurikuler', function () {
        return view('pages.kehidupan-siswa.ekstrakurikuler');
    })->name('kehidupan-siswa.ekstrakurikuler');
    Route::get('kehidupan-rohani', function () {
        return view('pages.kehidupan-siswa.kehidupan-rohani');
    })->name('kehidupan-siswa.kehidupan-rohani');
    Route::get('layanan-siswa', function () {
        return view('pages.kehidupan-siswa.layanan-siswa');
    })->name('kehidupan-siswa.layanan-siswa');
    Route::get('asrama-phh', function () {
        return view('pages.kehidupan-siswa.asrama-phh');
    })->name('kehidupan-siswa.asrama-phh');
})->name('kehidupan-siswa');

// Lembaga
Route::prefix('lembaga')->group(function () {
    Route::get('rauhatul-athfal', function () {
        return view('pages.lembaga.rauhatul-athfal');
    })->name('lembaga.rauhatul-athfal');
    Route::get('madrasah-ibtidaiyah', function () {
        return view('pages.lembaga.madrasah-ibtidaiyah');
    })->name('lembaga.madrasah-ibtidaiyah');
    Route::get('madrasah-tsanawiyah', function () {
        return view('pages.lembaga.madrasah-tsanawiyah');
    })->name('lembaga.madrasah-tsanawiyah');
    Route::get('sma-islam', function () {
        return view('pages.lembaga.sekolah-menengah-atas-islam');
    })->name('lembaga.sekolah-menengah-atas-islam');
    Route::get('pondok-tahfidz', function () {
        return view('pages.lembaga.pondok-tahfidz');
    })->name('lembaga.pondok-tahfidz');
})->name('lembaga');

// Jenjang
Route::prefix('jenjang')->group(function () {
    Route::get('tk', function () {
        return view('pages.jenjang.tk');
    })->name('jenjang.tk');
    Route::get('sd', function () {
        return view('pages.jenjang.sd');
    })->name('jenjang.sd');
    Route::get('smp', function () {
        return view('pages.jenjang.smp');
    })->name('jenjang.smp');
    Route::get('sma', function () {
        return view('pages.jenjang.sma');
    })->name('jenjang.sma');
})->name('jenjang');

// Berita dan Acara
Route::prefix('berita-dan-acara')->group(function () {
    Route::prefix('berita')->group(function () {
        Route::get('/', function () {
            return view('pages.berita-dan-acara.berita.index');
        })->name('berita-dan-acara.berita.index');
        Route::get('/{slug}', function ($slug) {
            return view('pages.berita-dan-acara.berita.show', compact('slug'));
        })->name('berita-dan-acara.berita.show');
    })->name('berita-dan-acara.berita');
    Route::prefix('acara')->group(function () {
        Route::get('/', function () {
            return view('pages.berita-dan-acara.acara.index');
        })->name('berita-dan-acara.acara.index');
        Route::get('/{slug}', function ($slug) {
            return view('pages.berita-dan-acara.acara.show', compact('slug'));
        })->name('berita-dan-acara.acara.show');
    })->name('berita-dan-acara.acara');
    Route::get('publikasi', function () {
        return view('pages.berita-dan-acara.publikasi');
    })->name('berita-dan-acara.publikasi');
})->name('berita-dan-acara');

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
