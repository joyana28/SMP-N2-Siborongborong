<?php
namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::with('admin')->get();
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('fasilitas.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tahun' => 'required|string|max:100',
            'kerusakan' => 'nullable|string|max:100',
            'penambahan' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('fasilitas', $fileName, 'public');

            DataFasilitas::create([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $fotoPath,
                'tahun' => $request->tahun,
                'kerusakan' => $request->kerusakan,
                'penambahan' => $request->penambahan,
            ]);

            return redirect()->route('fasilitas.index')
                ->with('success', 'Data fasilitas berhasil dibuat');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah foto');
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.show', compact('fasilitas'));
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $admins = Admin::all();
        return view('fasilitas.edit', compact('fasilitas', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tahun' => 'required|string|max:100',
            'kerusakan' => 'nullable|string|max:100',
            'penambahan' => 'nullable|string|max:100',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $fasilitas = Fasilitas::findOrFail($id);
        
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if (Storage::disk('public')->exists($fasilitas->foto)) {
                Storage::disk('public')->delete($fasilitas->foto);
            }
            
            // Upload foto baru
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('fasilitas', $fileName, 'public');
            
            $fasilitas->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'tahun' => $request->tahun,
                'kerusakan' => $request->kerusakan,
                'penambahan' => $request->penambahan,
                ]);
        } else {
            $fasilitas->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'tahun' => $request->tahun,
                'kerusakan' => $request->kerusakan,
                'penambahan' => $request->penambahan,
                ]);
        }

        return redirect()->route('fasilitas.index')
            ->with('success', 'Data fasilitas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        
        // Hapus foto
        if (Storage::disk('public')->exists($fasilitas->foto)) {
            Storage::disk('public')->delete($fasilitas->foto);
        }
        
        $fasilitas->delete();

        return redirect()->route('fasilitas.index')
            ->with('success', 'Data fasilitas berhasil dihapus');
    }
}