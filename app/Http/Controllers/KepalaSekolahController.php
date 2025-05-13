<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{
    public function index()
    {
        $kepalaSekolah = KepalaSekolah::all();
        return view('admin.kepala_sekolah.index', compact('kepalaSekolah'));
    }

    public function create()
    {
        return view('admin.kepala_sekolah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'periode' => 'required|string|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('foto');
        $data['id_admin'] = session('admin_id');

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('kepala_sekolah'), $fotoName);
            $data['foto'] = $fotoName;
        }

        KepalaSekolah::create($data);

        return redirect()->route('admin.kepala_sekolah.index')
            ->with('success', 'Data Kepala Sekolah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kepalaSekolah = KepalaSekolah::findOrFail($id);
        return view('admin.kepala_sekolah.edit', compact('kepalaSekolah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'periode' => 'required|string|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        $kepalaSekolah = KepalaSekolah::findOrFail($id);
        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($kepalaSekolah->foto && file_exists(public_path('kepala_sekolah/' . $kepalaSekolah->foto))) {
                unlink(public_path('kepala_sekolah/' . $kepalaSekolah->foto));
            }

            // Upload foto baru
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('kepala_sekolah'), $fotoName);
            $data['foto'] = $fotoName;
        }

        $kepalaSekolah->update($data);

        return redirect()->route('admin.kepala_sekolah.index')
            ->with('success', 'Data Kepala Sekolah berhasil diperbarui.');
    }

    public function showFrontend()
    {
        $kepalaSekolah = KepalaSekolah::latest()->first();
        return view('kepala_sekolah.show', compact('kepalaSekolah'));
    }

    public function destroy($id)
    {
        $kepalaSekolah = KepalaSekolah::findOrFail($id);

        if ($kepalaSekolah->foto && file_exists(public_path('kepala_sekolah/' . $kepalaSekolah->foto))) {
            unlink(public_path('kepala_sekolah/' . $kepalaSekolah->foto));
        }

        $kepalaSekolah->delete();

        return redirect()->route('admin.kepala_sekolah.index')
            ->with('success', 'Data Kepala Sekolah berhasil dihapus.');
    }
}
