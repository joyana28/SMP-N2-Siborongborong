<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::with('admin')->get();
        return view('admin.guru.index', compact('guru'));
    }

    public function daftarGuru()
    {
        $guru = Guru::orderBy('nama', 'asc')->get();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
{
    $data = $request->except('foto');
    $data['id_admin'] = session('admin_id');

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoName = time() . '_' . $foto->getClientOriginalName();
        $foto->move(public_path('guru'), $fotoName);
        $data['foto'] = $fotoName;
    }

    Guru::create($data);

    return redirect()->route('admin.guru.index')
        ->with('success', 'Data Guru berhasil ditambahkan.');
}

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
{
    $guru = Guru::findOrFail($id);

    // Ambil semua data kecuali 'foto'
    $data = $request->except('foto');

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoName = time() . '_' . $foto->getClientOriginalName();
        $foto->move(public_path('guru'), $fotoName);
        $data['foto'] = $fotoName;

        // Hapus foto lama jika ada dan bukan default
        if ($guru->foto && file_exists(public_path('guru/' . $guru->foto))) {
            unlink(public_path('guru/' . $guru->foto));
        }
    }

    $guru->update($data);

    return redirect()->route('admin.guru.index')
        ->with('success', 'Data Guru berhasil diperbarui.');
}

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        $path = public_path('guru/' . $guru->foto);
        if ($guru->foto && file_exists($path)) {
        unlink($path);
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data Guru berhasil dihapus.');
    }
}
