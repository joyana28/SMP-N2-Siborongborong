<?php

namespace App\Http\Controllers;

use App\Models\FormulirPendaftaran;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormulirPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulir = FormulirPendaftaran::with('admin')->get();
        return view('formulir-pendaftaran.index', compact('formulir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('formulir-pendaftaran.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'deskripsi' => 'required|string|max:100',
            'formulir_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'id_admin' => $request->id_admin,
            'deskripsi' => $request->deskripsi,
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_berakhir' => $request->tanggal_berakhir,
        ];

        // Handle file upload
        if ($request->hasFile('formulir_file')) {
            $file = $request->file('formulir_file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/formulir', $fileName);
            $data['formulir_pendaftaran'] = $fileName;
        }

        FormulirPendaftaran::create($data);

        return redirect()->route('formulir-pendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormulirPendaftaran $formulirPendaftaran)
    {
        return view('formulir-pendaftaran.show', compact('formulirPendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormulirPendaftaran $formulirPendaftaran)
    {
        $admins = Admin::all();
        return view('formulir-pendaftaran.edit', compact('formulirPendaftaran', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormulirPendaftaran $formulirPendaftaran)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'deskripsi' => 'required|string|max:100',
            'formulir_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'id_admin' => $request->id_admin,
            'deskripsi' => $request->deskripsi,
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_berakhir' => $request->tanggal_berakhir,
        ];

        // Handle file upload
        if ($request->hasFile('formulir_file')) {
            // Delete old file if exists
            if ($formulirPendaftaran->formulir_pendaftaran) {
                Storage::delete('public/formulir/' . $formulirPendaftaran->formulir_pendaftaran);
            }
            
            $file = $request->file('formulir_file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/formulir', $fileName);
            $data['formulir_pendaftaran'] = $fileName;
        }

        $formulirPendaftaran->update($data);

        return redirect()->route('formulir-pendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormulirPendaftaran $formulirPendaftaran)
    {
        // Delete file if exists
        if ($formulirPendaftaran->formulir_pendaftaran) {
            Storage::delete('public/formulir/' . $formulirPendaftaran->formulir_pendaftaran);
        }
        
        $formulirPendaftaran->delete();

        return redirect()->route('formulir-pendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil dihapus');
    }
}