<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');

