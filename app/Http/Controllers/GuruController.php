<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::with('admin')->get();
        return view('admin.guru.index', compact('guru'));
    }
    
    public function create()
    {
        $admins = Admin::whereDoesntHave('guru')->get();
        return view('admin.guru.create', compact('admins'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'nullable|image|max:2048',
        ]);
        
        $data = $request->all();
        
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/guru', $fotoName);
            $data['foto'] = $fotoName;
        }
        
        Guru::create($data);
        
        return redirect()->route('admin.guru.index')
                        ->with('success', 'Data Guru berhasil ditambahkan.');
    }
    
    public function show($id)
    {
        $guru = Guru::with('admin')->findOrFail($id);
        return view('admin.guru.show', compact('guru'));
    }
    
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        $admins = Admin::whereDoesntHave('guru')
                ->orWhere('id_admin', $guru->id_admin)
                ->get();
        return view('guru.edit', compact('guru', 'admins'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'nullable|image|max:2048',
        ]);
        
        $guru = Guru::findOrFail($id);
        $data = $request->all();
        
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($guru->foto) {
                Storage::delete('public/guru/' . $guru->foto);
            }
            
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
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
        
        // Hapus foto jika ada
        if ($guru->foto) {
            Storage::delete('public/guru/' . $guru->foto);
        }
        
        $guru->delete();
        
        return redirect()->route('admin.guru.index')
                        ->with('success', 'Data Guru berhasil dihapus.');
    }
}