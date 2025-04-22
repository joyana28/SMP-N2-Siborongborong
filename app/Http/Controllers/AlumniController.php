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
        return view('alumni.index', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('alumni.create', compact('admins'));
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
        ];

        // Handle file upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/alumni', $fotoName);
            $data['foto'] = $fotoName;
        }

        Alumni::create($data);

        return redirect()->route('alumni.index')
            ->with('success', 'Data alumni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumni $alumni)
    {
        return view('alumni.show', compact('alumni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumni $alumni)
    {
        $admins = Admin::all();
        return view('alumni.edit', compact('alumni', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumni $alumni)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
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
        ];

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($alumni->foto) {
                Storage::delete('public/alumni/' . $alumni->foto);
            }
            
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/alumni', $fotoName);
            $data['foto'] = $fotoName;
        }

        $alumni->update($data);

        return redirect()->route('alumni.index')
            ->with('success', 'Data alumni berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
    {
        // Delete file if exists
        if ($alumni->foto) {
            Storage::delete('public/alumni/' . $alumni->foto);
        }
        
        $alumni->delete();

        return redirect()->route('alumni.index')
            ->with('success', 'Data alumni berhasil dihapus');
    }
}