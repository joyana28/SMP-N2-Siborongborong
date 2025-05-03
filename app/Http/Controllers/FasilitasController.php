<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::with('admin')->paginate(10);
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tahun' => 'required|string|max:100',
            'perhatian_teknis' => 'nullable|string|max:100',
            'penambahan' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoPath = $fotoFile->storeAs('public/fasilitas', $fotoName);
            $foto = $fotoName;
        }

        Fasilitas::create([
            'id_admin' => session('admin_id'),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto ?? null,
            'tahun' => $request->tahun,
            'perhatian_teknis' => $request->perhatian_teknis,
            'penambahan' => $request->penambahan,
        ]);

        return redirect()->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tahun' => 'required|string|max:100',
            'perhatian_teknis' => 'nullable|string|max:100',
            'penambahan' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $fasilitas = Fasilitas::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($fasilitas->foto && Storage::exists('public/fasilitas/' . $fasilitas->foto)) {
                Storage::delete('public/fasilitas/' . $fasilitas->foto);
            }

            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoPath = $fotoFile->storeAs('public/fasilitas', $fotoName);
            $fasilitas->foto = $fotoName;
        }

        $fasilitas->nama = $request->nama;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->tahun = $request->tahun;
        $fasilitas->perhatian_teknis = $request->perhatian_teknis;
        $fasilitas->penambahan = $request->penambahan;
        $fasilitas->save();

        return redirect()->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        if ($fasilitas->foto && Storage::exists('public/fasilitas/' . $fasilitas->foto)) {
            Storage::delete('public/fasilitas/' . $fasilitas->foto);
        }

        $fasilitas->delete();

        return redirect()->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas berhasil dihapus!');
    }
}
