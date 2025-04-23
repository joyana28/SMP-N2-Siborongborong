<?php

namespace App\Http\Controllers;

use App\Models\FormulirPendaftaran;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormulirPendaftaranController extends Controller
{
    public function index()
    {
        $formulir = FormulirPendaftaran::with('admin')->get();
        return view('admin.formulirpendaftaran.index', compact('formulir'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('admin.formulirpendaftaran.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'required|file|mimes:pdf|max:2048',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['id_admin', 'deskripsi', 'tanggal_terbit', 'tanggal_berakhir']);

        if ($request->hasFile('formulir_pendaftaran')) {
            $file = $request->file('formulir_pendaftaran');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/formulir', $fileName);
            $data['formulir_pendaftaran'] = $fileName;
        }

        FormulirPendaftaran::create($data);

        return redirect()->route('formulirpendaftaran.index')->with('success', 'Formulir pendaftaran berhasil ditambahkan');
    }

    public function show(FormulirPendaftaran $formulirpendaftaran)
    {
        return view('admin.formulirpendaftaran.show', compact('formulirpendaftaran'));
    }

    public function edit(FormulirPendaftaran $formulirpendaftaran)
    {
        $admins = Admin::all();
        return view('admin.formulirpendaftaran.edit', compact('formulirpendaftaran', 'admins'));
    }

    public function update(Request $request, FormulirPendaftaran $formulirpendaftaran)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'nullable|file|mimes:pdf|max:2048',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['id_admin', 'deskripsi', 'tanggal_terbit', 'tanggal_berakhir']);

        if ($request->hasFile('formulir_pendaftaran')) {
            if ($formulirpendaftaran->formulir_pendaftaran) {
                Storage::delete('public/formulir/' . $formulirpendaftaran->formulir_pendaftaran);
            }

            $file = $request->file('formulir_pendaftaran');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/formulir', $fileName);
            $data['formulir_pendaftaran'] = $fileName;
        }

        $formulirpendaftaran->update($data);

        return redirect()->route('formulirpendaftaran.index')->with('success', 'Formulir pendaftaran berhasil diperbarui');
    }

    public function destroy(FormulirPendaftaran $formulirpendaftaran)
    {
        if ($formulirpendaftaran->formulir_pendaftaran) {
            Storage::delete('public/formulir/' . $formulirpendaftaran->formulir_pendaftaran);
        }

        $formulirpendaftaran->delete();

        return redirect()->route('formulirpendaftaran.index')->with('success', 'Formulir pendaftaran berhasil dihapus');
    }
}
