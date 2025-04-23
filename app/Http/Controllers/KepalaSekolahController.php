<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepalaSekolahController extends Controller
{
    public function index()
    {
        $kepalasekolah = KepalaSekolah::with('admin')->get();
        $kepsekCount = $kepalasekolah->count();

        return view('admin.kepalasekolah.index', compact('kepalasekolah', 'kepsekCount'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('admin.kepalasekolah.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:30',
            'golongan' => 'required|string|max:10',
            'periode' => 'required|string|max:50',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foto_kepsek', $fileName);
            $data['foto'] = $fileName;
        }

        KepalaSekolah::create($data);

        return redirect()->route('admin.kepalasekolah.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kepsek = KepalaSekolah::findOrFail($id);
        $admins = Admin::all();

        return view('admin.kepalasekolah.edit', compact('kepsek', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $kepsek = KepalaSekolah::findOrFail($id);

        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:30',
            'golongan' => 'required|string|max:10',
            'periode' => 'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            if ($kepsek->foto) {
                Storage::delete('public/foto_kepsek/' . $kepsek->foto);
            }
            $file = $request->file('foto');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foto_kepsek', $fileName);
            $data['foto'] = $fileName;
        }

        $kepsek->update($data);

        return redirect()->route('admin.kepalasekolah.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kepsek = KepalaSekolah::findOrFail($id);

        if ($kepsek->foto) {
            Storage::delete('public/foto_kepsek/' . $kepsek->foto);
        }

        $kepsek->delete();

        return response()->json(['success' => 'Data berhasil dihapus.']);
    }
}
