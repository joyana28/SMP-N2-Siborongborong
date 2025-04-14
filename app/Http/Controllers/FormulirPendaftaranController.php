<?php
// FormulirPendaftaranController
namespace App\Http\Controllers;

use App\Models\FormulirPendaftaran;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FormulirPendaftaranController extends Controller
{
    public function index()
    {
        $formulir = FormulirPendaftaran::with('admin')->get();
        return view('formulir.index', compact('formulir'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('formulir.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('formulir_pendaftaran')) {
            $file = $request->file('formulir_pendaftaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('formulir', $fileName, 'public');

            FormulirPendaftaran::create([
                'id_admin' => $request->id_admin,
                'deskripsi' => $request->deskripsi,
                'formulir_pendaftaran' => $filePath,
                'tanggal_terbit' => $request->tanggal_terbit,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);

            return redirect()->route('formulir.index')
                ->with('success', 'Formulir pendaftaran berhasil dibuat');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah file');
    }

    public function show($id)
    {
        $formulir = FormulirPendaftaran::findOrFail($id);
        return view('formulir.show', compact('formulir'));
    }

    public function edit($id)
    {
        $formulir = FormulirPendaftaran::findOrFail($id);
        $admins = Admin::all();
        return view('formulir.edit', compact('formulir', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'deskripsi' => 'required|string|max:100',
            'formulir_pendaftaran' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_terbit',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $formulir = FormulirPendaftaran::findOrFail($id);
        
        if ($request->hasFile('formulir_pendaftaran')) {
            // Delete old file
            if (Storage::disk('public')->exists($formulir->formulir_pendaftaran)) {
                Storage::disk('public')->delete($formulir->formulir_pendaftaran);
            }
            
            // Upload new file
            $file = $request->file('formulir_pendaftaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('formulir', $fileName, 'public');
            
            $formulir->update([
                'id_admin' => $request->id_admin,
                'deskripsi' => $request->deskripsi,
                'formulir_pendaftaran' => $filePath,
                'tanggal_terbit' => $request->tanggal_terbit,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
        } else {
            $formulir->update([
                'id_admin' => $request->id_admin,
                'deskripsi' => $request->deskripsi,
                'tanggal_terbit' => $request->tanggal_terbit,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
        }

        return redirect()->route('formulir.index')
            ->with('success', 'Formulir pendaftaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $formulir = FormulirPendaftaran::findOrFail($id);
        
        // Delete file
        if (Storage::disk('public')->exists($formulir->formulir_pendaftaran)) {
            Storage::disk('public')->delete($formulir->formulir_pendaftaran);
        }
        
        $formulir->delete();

        return redirect()->route('formulir.index')
            ->with('success', 'Formulir pendaftaran berhasil dihapus');
    }

    public function download($id)
    {
        $formulir = FormulirPendaftaran::findOrFail($id);
        return Storage::disk('public')->download($formulir->formulir_pendaftaran);
    }
}