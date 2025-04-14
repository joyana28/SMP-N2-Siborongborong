<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::with('admin')->get();
        return view('prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('prestasi.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
            'jenis' => 'required|in:akademik,non-akademik',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk foto
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('prestasi', $fileName, 'public');

            Prestasi::create([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'tanggal' => $request->tanggal,
                'jenis' => $request->jenis,
                'foto' => $filePath,
            ]);

            return redirect()->route('prestasi.index')
                ->with('success', 'Data prestasi berhasil dibuat');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah foto');
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $admins = Admin::all();
        return view('prestasi.edit', compact('prestasi', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
            'jenis' => 'required|in:akademik,non-akademik',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk foto opsional saat update
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $prestasi = Prestasi::findOrFail($id);
        
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if (Storage::disk('public')->exists($prestasi->foto)) {
                Storage::disk('public')->delete($prestasi->foto);
            }
            
            // Upload foto baru
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('prestasi', $fileName, 'public');
            
            $prestasi->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'tanggal' => $request->tanggal,
                'jenis' => $request->jenis,
                'foto' => $filePath,
            ]);
        } else {
            $prestasi->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'tanggal' => $request->tanggal,
                'jenis' => $request->jenis,
            ]);
        }

        return redirect()->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        
        // Hapus foto
        if (Storage::disk('public')->exists($prestasi->foto)) {
            Storage::disk('public')->delete($prestasi->foto);
        }
        
        $prestasi->delete();

        return redirect()->route('prestasi.index')
            ->with('success', 'Data prestasi berhasil dihapus');
    }
}