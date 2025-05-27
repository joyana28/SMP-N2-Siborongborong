<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $request->validate([
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50|unique:guru,nip',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'no_telp' => 'required|digits_between:10,15',
            'golongan' => 'nullable|string|max:50',
            'bidang' => ['required', Rule::in(['Agama', 'PKN', 'Bahasa Indonesia', 'Matematika', 'IPA', 'IPS', 'Bahasa Inggris', 'Seni Budaya', 'Prakarya', 'TIK', 'Bahasa Daerah'])],
        ]);

        $data = $request->except('foto');
        $data['id_admin'] = session('admin_id'); // Pastikan session ini tersedia

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('guru'), $fotoName);
            $data['foto'] = $fotoName;
        }

        Guru::create($data);

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50|unique:guru,nip,' . $id . ',id_guru',
            'golongan' => 'required|string|max:50',
            'bidang' => ['required', Rule::in(['Agama', 'PKN', 'Bahasa Indonesia', 'Matematika', 'IPA', 'IPS', 'Bahasa Inggris', 'Seni Budaya', 'Prakarya', 'TIK', 'Bahasa Daerah'])],
            'no_telp' => 'required|digits_between:10,15',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            if ($guru->foto && file_exists(public_path('guru/' . $guru->foto))) {
                unlink(public_path('guru/' . $guru->foto));
            }

            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('guru'), $fotoName);
            $data['foto'] = $fotoName;
        }

        $guru->update($data);

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->foto && file_exists(public_path('guru/' . $guru->foto))) {
            unlink(public_path('guru/' . $guru->foto));
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil dihapus.');
    }
}
