<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumniController;
use App\Models\Alumni;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\FormulirPendaftaranController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES (UMUM / PENGUNJUNG)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil/visimisi', [AboutController::class, 'visimisi'])->name('profil.visimisi');

Route::get('/profil/fasilitas', [AboutController::class, 'fasilitas'])->name('profil.fasilitas');
Route::get('/profil/fasilitas', function () {
    return view('about.fasilitas');
})->name('profil.fasilitas');

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');
Route::get('/ekstrakurikuler/{slug}', [EkstrakurikulerController::class, 'show'])->name('ekstrakurikuler.show');

Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/prestasi/{slug}', [PrestasiController::class, 'show'])->name('prestasi.show');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');

Route::get('/formulir', [FormulirPendaftaranController::class, 'index'])->name('formulir.index');
Route::get('/pendaftaran', [FormulirPendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/fasilitas', [FasilitasController::class,'view'])->name('fasilitas.index');
Route::get('/fasilitas/{fasilitas:slug}',[FasilitasController::class,'show'])->name('fasilitas.show');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{slug}', [PengumumanController::class, 'show'])->name('pengumuman.show');

Route::get('/guru', [App\Http\Controllers\GuruController::class, 'daftarGuru'])->name('guru.index');

Route::get('/kepalasekolah', [KepalaSekolahController::class, 'index'])->name('kepalasekolah.index');


/*
|--------------------------------------------------------------------------
| AUTENTIKASI USER
|--------------------------------------------------------------------------
*/

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/adminlogin', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.dashboard');
    })->name('dashboard');

// Rute
    Route::resource('alumni', AlumniController::class);
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
    Route::resource('formulirpendaftaran', FormulirPendaftaranController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kepala_sekolah', KepalaSekolahController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('prestasi', PrestasiController::class);
    Route::resource('fasilitas', FasilitasController::class);

});

