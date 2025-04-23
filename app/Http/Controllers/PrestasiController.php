<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::with('admin')->get();
        return view('admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('admin.prestasi.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
            'jenis' => 'required|in:akademik,non-akademik',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'id_admin' => $request->id_admin,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
        ];

        // Handle file upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/prestasi', $fotoName);
            $data['foto'] = $fotoName;
        }

        Prestasi::create($data);

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Data prestasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        return view('admin.prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        $admins = Admin::all();
        return view('admin.prestasi.edit', compact('prestasi', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
            'jenis' => 'required|in:akademik,non-akademik',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'id_admin' => $request->id_admin,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
        ];

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($prestasi->foto) {
                Storage::delete('public/prestasi/' . $prestasi->foto);
            }
            
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/prestasi', $fotoName);
            $data['foto'] = $fotoName;
        }

        $prestasi->update($data);

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Data prestasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        // Delete file if exists
        if ($prestasi->foto) {
            Storage::delete('public/prestasi/' . $prestasi->foto);
        }
        
        $prestasi->delete();

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Data prestasi berhasil dihapus');
    }
}