<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
use App\Http\Controllers\VisiMisiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profil/visimisi', [AboutController::class, 'visiMisi'])->name('profil.visimisi');
Route::get('/profil/ekstrakurikuler', [AboutController::class, 'ekstrakurikuler'])->name('profil.ekstrakurikuler');
Route::get('/profil/fasilitas', [AboutController::class, 'fasilitas'])->name('profil.fasilitas');

Route::get('/prestasi-akademik', [PrestasiController::class, 'akademik'])->name('prestasi.akademik');
Route::get('/prestasi-non-akademik', [PrestasiController::class, 'nonAkademik'])->name('prestasi.nonakademik');

Route::get('/formulirpendaftaran', [FormulirPendaftaranController::class, 'showFrontend'])->name('formulirpendaftaran.show');

Route::get('/siswa', [SiswaController::class, 'showFrontend'])->name('siswa.show');

Route::get('/alumni', [AlumniController::class, 'showFrontend'])->name('alumni.show');

Route::get('/', [PengumumanController::class, 'blog'])->name('home');
Route::get('/pengumuman/{id}', [PengumumanController::class, 'showBlog'])->name('pengumuman.showBlog');

Route::get('/guru', [App\Http\Controllers\GuruController::class, 'daftarGuru'])->name('guru.index');

Route::get('/kepala-sekolah', [KepalaSekolahController::class, 'showFrontend'])->name('kepala_sekolah.show');

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
 Route::get('/visi-misi', [VisiMisiController::class, 'visiMisi'])->name('visi.misi');

    Route::resource('prestasi', PrestasiController::class);
    Route::resource('alumni', AlumniController::class);
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
    Route::resource('formulirpendaftaran', FormulirPendaftaranController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kepala_sekolah', KepalaSekolahController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('fasilitas', FasilitasController::class);
});
