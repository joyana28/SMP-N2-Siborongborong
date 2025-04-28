<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Admin;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::with('admin')->get();
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('admin.siswa.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer',
            'jumlah_siswa_l' => 'required|integer',
            'jumlah_siswa_p' => 'required|integer',
            'tahun' => 'required',
            'wali_kelas' => 'nullable|string|max:50',
            'id_admin' => 'required|exists:admin,id_admin',
        ]);

        Siswa::create($request->all());

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view('admin.siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        $admins = Admin::all();
        return view('admin.siswa.edit', compact('siswa', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer',
            'jumlah_siswa_l' => 'required|integer',
            'jumlah_siswa_p' => 'required|integer',
            'tahun' => 'required',
            'wali_kelas' => 'nullable|string|max:50',
            'id_admin' => 'required|exists:admin,id_admin',
        ]);

        $siswa->update($request->all());

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data kelas berhasil dihapus.');
    }
}