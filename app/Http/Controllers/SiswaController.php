<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('admin')->get();
        return view('admin.siswa.index', compact('siswa'));
    }

    public function create()
    {
        $guru = Guru::orderBy('nama', 'asc')->get();
        return view('admin.siswa.create', compact('guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer',
            'jumlah_siswa_l' => 'required|integer',
            'jumlah_siswa_p' => 'required|integer',
            'tahun' => 'required',
            'wali_kelas' => 'nullable|exists:guru,nama',
        ]);

        $data = $request->only([
            'nama_kelas',
            'jumlah_siswa',
            'jumlah_siswa_l',
            'jumlah_siswa_p',
            'tahun',
            'wali_kelas',
        ]);

        $data['id_admin'] = session('admin_id');

        Siswa::create($data);

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil ditambahkan.');
    }

    public function edit(Siswa $siswa)
    {
        $guru = Guru::orderBy('nama', 'asc')->get();
        return view('admin.siswa.edit', compact('siswa', 'guru'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer',
            'jumlah_siswa_l' => 'required|integer',
            'jumlah_siswa_p' => 'required|integer',
            'tahun' => 'required',
            'wali_kelas' => 'nullable|exists:guru,nama',
        ]);

        $data = $request->only([
            'nama_kelas',
            'jumlah_siswa',
            'jumlah_siswa_l',
            'jumlah_siswa_p',
            'tahun',
            'wali_kelas',
        ]);

        $siswa->update($data);

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil diperbarui.');
    }

    public function showFrontend()
    {
        $siswa = Siswa::all();
        return view('siswa.show', compact('siswa'));
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil dihapus.');
    }
}
