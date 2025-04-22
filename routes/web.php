<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
use App\Http\Controllers\PengumumanController; // Pastikan pengumuman controller ada jika diperlukan

// Halaman utama (sementara arahkan ke halaman backend dulu)
Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');


// Autentikasi (sementara login manual)
// Route login Laravel default
Route::get('/login', function () {
    return view('auth.login');  
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Frontend
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/visimisi', [AboutController::class, 'visimisi'])->name('visimisi');
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');

// Konten dinamis
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/tenagapengajar', [GuruController::class, 'index'])->name('guru.index');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

// Rute formulir pendaftaran
Route::get('/formulir', [FormulirPendaftaranController::class, 'index'])->name('formulir.index');

// Pendaftaran dan fasilitas
Route::get('/pendaftaran', [FormulirPendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

// Kepala Sekolah
Route::get('/kepalasekolah', [KepalaSekolahController::class, 'index'])->name('kepalasekolah.index');

// Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');

// Pengumuman - Pastikan Anda memiliki PengumumanController
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index'); // Tambahkan ini jika pengumuman diperlukan

// Route login khusus admin (hardcoded login)
Route::view('/admin/login', 'admin.login')->name('admin.login');

Route::post('/admin/login', function(Request $request) {
    // Data login yang valid
    $validUsername = 'admin';
    $validPassword = 'admin123';
    $validNama = 'Admin Satu';
    $validEmail = 'admin@example.com';

    // Cek semua input sesuai
    if (
        $request->username === $validUsername &&
        $request->password === $validPassword &&
        $request->nama === $validNama &&
        $request->email === $validEmail
    ) {
        session(['admin_logged_in' => true]);
        return redirect('/admin/dashboard');
    } else {
        return redirect()->back()->withErrors(['login' => 'Data login tidak sesuai.']);
    }
})->name('admin.login.submit');

Route::get('/admin/dashboard', function () {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login');
    }
    return view('admin.dashboard');
});

// Halaman frontend
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/profil/visimisi', function () {
    return view('profil.visimisi');
})->name('profil.visimisi');
Route::get('/profil/fasilitas', function () {
    return view('profil.fasilitas');
})->name('profil.fasilitas');
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');



