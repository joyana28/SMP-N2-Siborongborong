<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar semua kelas.
     */
    public function index()
    {
        $siswa = Siswa::with('admin')->get();
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Menampilkan form tambah data kelas.
     */
    public function create()
    {
        $guru = Guru::orderBy('nama', 'asc')->get();
        return view('admin.siswa.create', compact('guru'));
    }

    /**
     * Menyimpan data kelas baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kelas'       => 'required|string|max:50|unique:siswa,nama_kelas',
            'jumlah_siswa'     => 'required|integer|min:0',
            'jumlah_siswa_l'   => 'required|integer|min:0',
            'jumlah_siswa_p'   => 'required|integer|min:0',
            'tahun'            => 'required',
            'wali_kelas'       => 'nullable|exists:guru,nama',
        ]);

        // Validasi tambahan untuk jumlah total siswa
        if ((int) $request->jumlah_siswa !== ((int) $request->jumlah_siswa_l + (int) $request->jumlah_siswa_p)) {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'jumlah_siswa' => 'Jumlah siswa total harus sama dengan jumlah siswa laki-laki dan perempuan.'
                ]);
        }

        // Ambil data yang dibutuhkan
        $data = $request->only([
            'nama_kelas',
            'jumlah_siswa',
            'jumlah_siswa_l',
            'jumlah_siswa_p',
            'tahun',
            'wali_kelas',
        ]);

        // Tambahkan ID admin yang sedang login
        $data['id_admin'] = session('admin_id');

        // Simpan ke database
        Siswa::create($data);

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit data kelas.
     */
    public function edit(Siswa $siswa)
    {
        $guru = Guru::orderBy('nama', 'asc')->get();
        return view('admin.siswa.edit', compact('siswa', 'guru'));
    }

    /**
     * Memperbarui data kelas di database.
     */
    public function update(Request $request, Siswa $siswa)
    {
        // Validasi input
        $request->validate([
            'nama_kelas'       => 'required|unique:siswa,nama_kelas,' . $siswa->id_siswa . ',id_siswa',
            'jumlah_siswa'     => 'required|integer|min:0',
            'jumlah_siswa_l'   => 'required|integer|min:0',
            'jumlah_siswa_p'   => 'required|integer|min:0',
            'tahun'            => 'required',
            'wali_kelas'       => 'nullable|exists:guru,nama',
        ]);

        // Validasi tambahan untuk jumlah total siswa
        if ((int) $request->jumlah_siswa !== ((int) $request->jumlah_siswa_l + (int) $request->jumlah_siswa_p)) {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'jumlah_siswa' => 'Jumlah siswa total harus sama dengan jumlah siswa laki-laki dan perempuan.'
                ]);
        }

        // Ambil data yang dibutuhkan
        $data = $request->only([
            'nama_kelas',
            'jumlah_siswa',
            'jumlah_siswa_l',
            'jumlah_siswa_p',
            'tahun',
            'wali_kelas',
        ]);

        // Perbarui data
        $siswa->update($data);

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil diperbarui.');
    }

    /**
     * Menampilkan data kelas di halaman frontend.
     */
    public function showFrontend()
    {
        $siswa = Siswa::all();
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Menghapus data kelas dari database.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil dihapus.');
    }
}
