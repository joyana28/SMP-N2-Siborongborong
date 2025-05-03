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
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['nama', 'nip', 'golongan', 'bidang', 'no_telp']);
        $data['id_admin'] = session('admin_id');

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('public/guru', $fotoName);
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $guru = Guru::findOrFail($id);
        $data = $request->only(['nama', 'nip', 'golongan', 'bidang', 'no_telp']);

        if ($request->hasFile('foto')) {
            if ($guru->foto && Storage::exists('public/guru/' . $guru->foto)) {
                Storage::delete('public/guru/' . $guru->foto);
            }

            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('public/guru', $fotoName);
            $data['foto'] = $fotoName;
        }

        $guru->update($data);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data Guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->foto && Storage::exists('public/guru/' . $guru->foto)) {
            Storage::delete('public/guru/' . $guru->foto);
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data Guru berhasil dihapus.');
    }
}
