<?php

namespace App\Http\Controllers;

use App\Models\FormulirPendaftaran;
use App\Models\Admin;
use Illuminate\Http\Request;

class FormulirPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulirs = FormulirPendaftaran::with('admin')->get();
        return view('admin.formulirpendaftaran.index', compact('formulirs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('admin.formulirpendaftaran.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'required|string|max:100',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_terbit',
            'id_admin' => 'required|exists:admin,id_admin',
        ]);

        FormulirPendaftaran::create($request->all());

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormulirPendaftaran $formulirPendaftaran)
    {
        return view('admin.formulirpendaftaran.show', compact('formulirPendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormulirPendaftaran $formulirPendaftaran)
    {
        $admins = Admin::all();
        return view('admin.formulirpendaftaran.edit', compact('formulirPendaftaran', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormulirPendaftaran $formulirPendaftaran)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'required|string|max:100',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_terbit',
            'id_admin' => 'required|exists:admin,id_admin',
        ]);

        $formulirPendaftaran->update($request->all());

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormulirPendaftaran $formulirPendaftaran)
    {
        $formulirPendaftaran->delete();

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil dihapus.');
    }
}