<?php

namespace App\Http\Controllers;

use App\Models\FormulirPendaftaran;
use Illuminate\Http\Request;

class FormulirPendaftaranController extends Controller
{
    public function index()
    {
        $formulir = FormulirPendaftaran::paginate(10);
        return view('admin.formulirpendaftaran.index', compact('formulir'));
    }

    public function create()
    {
        return view('admin.formulirpendaftaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:150',
            'formulir_pendaftaran' => 'required|mimes:pdf,doc,docx|max:5000',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_terbit',
        ]);

        $fileName = null;
        if ($request->hasFile('formulir_pendaftaran')) {
            $file = $request->file('formulir_pendaftaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('formulirpendaftaran'), $fileName);
        }

        FormulirPendaftaran::create([
            'deskripsi' => $request->deskripsi,
            'formulir_pendaftaran' => $fileName,
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'id_admin' => session('admin_id'),
        ]);

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $formulirPendaftaran = FormulirPendaftaran::findOrFail($id);
        return view('admin.formulirpendaftaran.edit', compact('formulirPendaftaran'));
    }

    public function update(Request $request, $id)
    {
        $formulirPendaftaran = FormulirPendaftaran::findOrFail($id);

        $request->validate([
            'deskripsi' => 'required|string|max:150',
            'formulir_pendaftaran' => 'nullable|mimes:pdf,doc,docx|max:5000',
            'tanggal_terbit' => 'nullable|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($request->hasFile('formulir_pendaftaran')) {
            if ($formulirPendaftaran->formulir_pendaftaran) {
                $oldPath = public_path('formulirpendaftaran/' . $formulirPendaftaran->formulir_pendaftaran);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file = $request->file('formulir_pendaftaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('formulirpendaftaran'), $fileName);
            $formulirPendaftaran->formulir_pendaftaran = $fileName;
        }

        $formulirPendaftaran->update([
            'deskripsi' => $request->deskripsi,
            'formulir_pendaftaran' => $formulirPendaftaran->formulir_pendaftaran,
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_berakhir' => $request->tanggal_berakhir,
        ]);

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil diperbarui.');
    }

    public function showFrontend()
{
    $formulir = FormulirPendaftaran::latest()->first();
    return view('formulirpendaftaran.show', compact('formulir'));
}


    public function destroy($id)
    {
        $formulirPendaftaran = FormulirPendaftaran::findOrFail($id);

        if ($formulirPendaftaran->formulir_pendaftaran) {
            $filePath = public_path('formulirpendaftaran/' . $formulirPendaftaran->formulir_pendaftaran);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $formulirPendaftaran->delete();

        return redirect()->route('admin.formulirpendaftaran.index')
            ->with('success', 'Formulir pendaftaran berhasil dihapus.');
    }
}
