<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController; // Tambahkan ini jika belum

// Halaman Beranda (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman About
Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/{section}', [AboutController::class, 'show']);
