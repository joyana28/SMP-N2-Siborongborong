<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\EkstrakurikulerController;

// Halaman utama (sementara arahkan ke halaman backend dulu)
Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Halaman frontend (bisa diganti pakai controller jika sudah dibuat)
Route::get('/home', [HomeController::class, 'index']);
Route::get('/visimisi', [AboutController::class, 'visimisi']);
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');


// Halaman berdasarkan controller yang kamu pakai
Route::get('/prestasi', [PrestasiController::class, 'index']);
Route::get('/tenagapengajar', [GuruController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
