<?php

namespace App\Http\Controllers;

use App\Models\FormulirPendaftaran;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// ... (bagian atas tetap sama)

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
            'id_admin' => 'required|exists:admins,id',
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'required|string|max:100',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        FormulirPendaftaran::create($request->all());

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil dibuat.');
    }

    public function show($id)
    {
        $formulir = FormulirPendaftaran::with('admin')->findOrFail($id);
        return view('formulir_pendaftaran.show', compact('formulir'));
    }

    public function edit($id)
    {
        $formulir = FormulirPendaftaran::findOrFail($id);
        $admins = Admin::all();
        return view('formulir_pendaftaran.edit', compact('formulir', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'required|string|max:100',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $formulir = FormulirPendaftaran::findOrFail($id);
        $formulir->update($request->all());

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $formulir = FormulirPendaftaran::findOrFail($id);
        $formulir->delete();

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil dihapus.');
    }
}
