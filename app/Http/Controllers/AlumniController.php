<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = Alumni::with('admin')->get();
        return view('admin.alumni.index', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('admin.alumni.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dimasukkan
        $validated = $request->validate([
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyiapkan data yang akan disimpan
        $data = [
            'id_admin' => $validated['id_admin'],
            'nama' => $validated['nama'],
            'deskripsi' => $validated['deskripsi'],
        ];

        // Menangani upload foto jika ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/alumni', $fotoName);
            $data['foto'] = $fotoName; // Menambahkan nama foto ke data
        }

        // Menyimpan data alumni
        Alumni::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.alumni.index')
            ->with('success', 'Data alumni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumni $alumni)
    {
        return view('admin.alumni.show', compact('alumni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumni $alumni)
    {
        $admins = Admin::all();
        return view('admin.alumni.edit', compact('alumni', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumni $alumni)
    {
        // Validasi data yang dimasukkan
        $validated = $request->validate([
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyiapkan data untuk update
        $data = [
            'id_admin' => $validated['id_admin'],
            'nama' => $validated['nama'],
            'deskripsi' => $validated['deskripsi'],
        ];

        // Menangani upload foto baru jika ada
        if ($request->hasFile('foto')) {
            // Menghapus foto lama jika ada
            if ($alumni->foto) {
                Storage::delete('public/alumni/' . $alumni->foto);
            }

            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/alumni', $fotoName);
            $data['foto'] = $fotoName; // Menambahkan nama foto baru ke data
        }

        // Update data alumni
        $alumni->update($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.alumni.index')
            ->with('success', 'Data alumni berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
    {
        // Menghapus foto jika ada
        if ($alumni->foto) {
            Storage::delete('public/alumni/' . $alumni->foto);
        }

        // Menghapus data alumni
        $alumni->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.alumni.index')
            ->with('success', 'Data alumni berhasil dihapus');
    }
}
