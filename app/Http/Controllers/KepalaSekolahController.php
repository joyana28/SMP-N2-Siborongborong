<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class KepalaSekolahController extends Controller
{
    public function index()
    {
        $kepalaSekolah = KepalaSekolah::with('admin')->get();
        return view('admin.kepala_sekolah.index', compact('kepalaSekolah'));
    }
    
    public function create()
    {
        $admins = Admin::whereDoesntHave('kepalaSekolah')->get();
        return view('admin.kepala_sekolah.create', compact('admins'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'periode' => 'required|string|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);
        
        $data = $request->all();
        
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/kepala_sekolah', $fotoName);
            $data['foto'] = $fotoName;
        }
        
        KepalaSekolah::create($data);
        
        return redirect()->route('admin.kepala_sekolah.index')
                        ->with('success', 'Data Kepala Sekolah berhasil ditambahkan.');
    }
    
    public function show($id)
    {
        $kepalaSekolah = KepalaSekolah::with('admin')->findOrFail($id);
        return view('kepala_sekolah.show', compact('kepalaSekolah'));
    }
    
    public function edit($id)
    {
        $kepalaSekolah = KepalaSekolah::findOrFail($id);
        $admins = Admin::whereDoesntHave('kepalaSekolah')
                ->orWhere('id_admin', $kepalaSekolah->id_admin)
                ->get();
        return view('admin.kepala_sekolah.edit', compact('kepalaSekolah', 'admins'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'periode' => 'required|string|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);
        
        $kepalaSekolah = KepalaSekolah::findOrFail($id);
        $data = $request->all();
        
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($kepalaSekolah->foto) {
                Storage::delete('public/kepala_sekolah/' . $kepalaSekolah->foto);
            }
            
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/kepala_sekolah', $fotoName);
            $data['foto'] = $fotoName;
        }
        
        $kepalaSekolah->update($data);
        
        return redirect()->route('admin.kepala_sekolah.index')
                        ->with('success', 'Data Kepala Sekolah berhasil diperbarui.');
    }
    
    public function destroy($id)
    {
        $kepalaSekolah = KepalaSekolah::findOrFail($id);
        
        // Hapus foto jika ada
        if ($kepalaSekolah->foto) {
            Storage::delete('public/kepala_sekolah/' . $kepalaSekolah->foto);
        }
        
        $kepalaSekolah->delete();
        
        return redirect()->route('admin.kepala_sekolah.index')
                        ->with('success', 'Data Kepala Sekolah berhasil dihapus.');
    }
}