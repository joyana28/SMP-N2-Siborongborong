<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('about')->group(function () {
    Route::get('/visi-misi', [AboutController::class, 'visimisi'])->name('about.visimisi');
    Route::get('/fasilitas', [AboutController::class, 'fasilitas'])->name('about.fasilitas');
    Route::get('/ekstrakurikuler', [AboutController::class, 'ekstrakurikuler'])->name('about.ekstrakurikuler');
});

Route::prefix('prestasi')->group(function () {
    Route::get('/akademik', [PrestasiController::class, 'akademik'])->name('prestasi.akademik');
    Route::get('/non-akademik', [PrestasiController::class, 'nonakademik'])->name('prestasi.nonakademik');
});

Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');

