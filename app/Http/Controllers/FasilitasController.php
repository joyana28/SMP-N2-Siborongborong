<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::with('admin')->get();
        return view('fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('fasilitas.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tahun' => 'required|string|max:100',
            'kerusakan' => 'nullable|string|max:100',
            'penambahan' => 'nullable|string|max:100',
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
            'tahun' => $request->tahun,
            'kerusakan' => $request->kerusakan,
            'penambahan' => $request->penambahan,
        ];

        // Handle file upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/fasilitas', $fotoName);
            $data['foto'] = $fotoName;
        }

        Fasilitas::create($data);

        return redirect()->route('fasilitas.index')
            ->with('success', 'Data fasilitas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        return view('fasilitas.show', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        $admins = Admin::all();
        return view('fasilitas.edit', compact('fasilitas', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tahun' => 'required|string|max:100',
            'kerusakan' => 'nullable|string|max:100',
            'penambahan' => 'nullable|string|max:100',
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
            'tahun' => $request->tahun,
            'kerusakan' => $request->kerusakan,
            'penambahan' => $request->penambahan,
        ];

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($fasilitas->foto) {
                Storage::delete('public/fasilitas/' . $fasilitas->foto);
            }
            
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/fasilitas', $fotoName);
            $data['foto'] = $fotoName;
        }

        $fasilitas->update($data);

        return redirect()->route('fasilitas.index')
            ->with('success', 'Data fasilitas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        // Delete file if exists
        if ($fasilitas->foto) {
            Storage::delete('public/fasilitas/' . $fasilitas->foto);
        }
        
        $fasilitas->delete();

        return redirect()->route('fasilitas.index')
            ->with('success', 'Data fasilitas berhasil dihapus');
    }
}