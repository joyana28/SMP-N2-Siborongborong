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
Route::get('/profil/identitas', [AboutController::class, 'identitas'])->name('profil.identitas');

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');
Route::get('/ekstrakurikuler/{slug}', [EkstrakurikulerController::class, 'show'])->name('ekstrakurikuler.show');

Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/prestasi/{slug}', [PrestasiController::class, 'show'])->name('prestasi.show');


Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');

Route::get('/formulir', [FormulirPendaftaranController::class, 'index'])->name('formulir.index');
Route::get('/pendaftaran', [FormulirPendaftaranController::class, 'index'])->name('pendaftaran.index');

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/fasilitas/{slug}', [FasilitasController::class, 'show'])->name('fasilitas.show');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{slug}', [PengumumanController::class, 'show'])->name('pengumuman.show');

Route::get('/guru', [GuruController::class, 'index'])->name('admin.guru.index');

Route::get('/kepalasekolah', [KepalaSekolahController::class, 'index'])->name('kepalasekolah.index');


/*
|--------------------------------------------------------------------------
| AUTENTIKASI USER
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


/*
|--------------------------------------------------------------------------
| ADMIN LOGIN KHUSUS (MANUAL - SEDERHANA)
|--------------------------------------------------------------------------
*/
Route::view('/admin/login', 'auth.login')->name('auth.login');

// Proses Login Admin
Route::post('/admin/login', function (Request $request) {
    $validUsername = 'admin';
    $validPassword = 'admin123';
    $validNama     = 'Admin Satu';
    $validEmail    = 'admin@example.com';

    // Validasi login
    if (
        $request->username === $validUsername &&
        $request->password === $validPassword &&
        $request->full_name === $validNama &&
        $request->email === $validEmail
    ) {
        // Menyimpan session untuk login
        session(['admin_logged_in' => true]);
        // Redirect ke admin dashboard
        return redirect()->route('admin.dashboard');
    } else {
        // Jika login gagal
        return redirect()->back()->withErrors(['login' => 'Data login tidak sesuai.']);
    }
})->name('admin.login.submit');

// Grup Rute Admin (tanpa middleware)
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', function () {
        // Cek jika admin belum login
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.dashboard');
    })->name('dashboard');  // Nama route admin.dashboard

// Rute
    Route::resource('alumni', AlumniController::class);
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
    Route::resource('formulirpendaftaran', FormulirPendaftaranController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kepalasekolah', KepalaSekolahController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('prestasi', PrestasiController::class);
    Route::resource('fasilitas', FasilitasController::class);
});

