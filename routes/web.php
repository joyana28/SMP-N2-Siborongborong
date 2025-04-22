<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\FormulirPendaftaranController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PengumumanController;

// =====================================================================================
// 🏠 Halaman Utama
// =====================================================================================
Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');

// =====================================================================================
// 🔐 Autentikasi (Login Default dan Admin Sementara)
// =====================================================================================
// Login Laravel default
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Login admin sementara (hardcoded)
Route::view('/admin/login', 'admin.login')->name('admin.login');
Route::post('/admin/login', function(Request $request) {
    if ($request->username === 'admin' && $request->password === 'admin123') {
        session(['admin_logged_in' => true]);
        return redirect('/admin/dashboard');
    }
    return redirect()->back()->withErrors(['login' => 'Username atau password salah.']);
})->name('admin.login.submit');

Route::get('/admin/dashboard', function () {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login');
    }
    return view('admin.dashboard');
});

// =====================================================================================
// 🌐 Halaman Frontend
// =====================================================================================
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil/visimisi', [AboutController::class, 'visimisi'])->name('profil.visimisi');
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/tenagapengajar', [GuruController::class, 'index'])->name('guru.index');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
Route::get('/kepalasekolah', [KepalaSekolahController::class, 'index'])->name('kepalasekolah.index');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

// =====================================================================================
// 📄 Formulir dan Informasi
// =====================================================================================
Route::get('/formulir', [FormulirPendaftaranController::class, 'index'])->name('formulir.index');
Route::get('/pendaftaran', [FormulirPendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

// =====================================================================================
// 🔧 Admin Panel (Dengan Middleware auth)
// =====================================================================================
Route::prefix('admin')->group(function() {
    // CRUD Alumni
    Route::get('/alumni', [AlumniController::class, 'index'])->name('admin.alumni.index');
    Route::get('/alumni/create', [AlumniController::class, 'create'])->name('admin.alumni.create');
    Route::post('/alumni', [AlumniController::class, 'store'])->name('admin.alumni.store');
    Route::get('/alumni/{alumni}/edit', [AlumniController::class, 'edit'])->name('admin.alumni.edit');
    Route::put('/alumni/{alumni}', [AlumniController::class, 'update'])->name('admin.alumni.update');
    Route::delete('/alumni/{alumni}', [AlumniController::class, 'destroy'])->name('admin.alumni.destroy');
});

