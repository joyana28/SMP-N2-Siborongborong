<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = Alumni::latest()->paginate(10); 
        return view('admin.alumni.index', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'tahun_lulus' => 'nullable|date_format:Y',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Get the current admin ID - assuming you have authentication set up
        // If using default Laravel auth
        $adminId = 1; // Set a default admin ID for testing, or use Auth::id() if you have auth set up
        
        // Create the alumni record with all required fields
        $alumni = new Alumni();
        $alumni->nama = $request->nama;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->deskripsi = $request->deskripsi;
        $alumni->id_admin = $adminId; // Set the admin ID explicitly
        
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('public/alumni', $filename);
            $alumni->foto = 'alumni/' . $filename;
        }
        
        $alumni->save();
        
        return redirect()->route('admin.alumni.index')->with('success', 'Data alumni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumni $alumni)
    {
    return view('admin.alumni.show', ['alumni' => $alumni]);
    }


    /**
     * Show the form for editing the specified resource.
     */
public function edit(Alumni $alumni)
{
    return view('admin.alumni.edit', compact('alumni'));
}




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'tahun_lulus' => 'nullable|date_format:Y',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->nama = $request->nama;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->deskripsi = $request->deskripsi;
        
        // No need to update id_admin as it shouldn't change
        
        if ($request->hasFile('foto')) {
            // Delete old photo if exists
            if ($alumni->foto) {
                Storage::delete('public/' . $alumni->foto);
            }
            
            $foto = $request->file('foto');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('public/alumni', $filename);
            $alumni->foto = 'alumni/' . $filename;
        }
        
        $alumni->save();
        
        return redirect()->route('admin.alumni.index')->with('success', 'Data alumni berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
{
    // Hapus foto jika ada
    if ($alumni->foto) {
        Storage::delete('public/' . $alumni->foto);
    }

    $alumni->delete();

    return redirect()->route('admin.alumni.index')->with('success', 'Data alumni berhasil dihapus');
    }
}