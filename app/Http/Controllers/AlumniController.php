<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::with('admin')->get();
        return view('alumni.index', compact('alumni'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('alumni.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk foto
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('alumni', $fileName, 'public');

            Alumni::create([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $filePath,
            ]);

            return redirect()->route('alumni.index')
                ->with('success', 'Data alumni berhasil dibuat');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah foto');
    }

    public function show($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.show', compact('alumni'));
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        $admins = Admin::all();
        return view('alumni.edit', compact('alumni', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk foto opsional saat update
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $alumni = Alumni::findOrFail($id);
        
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if (Storage::disk('public')->exists($alumni->foto)) {
                Storage::disk('public')->delete($alumni->foto);
            }
            
            // Upload foto baru
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('alumni', $fileName, 'public');
            
            $alumni->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $filePath,
            ]);
        } else {
            $alumni->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        return redirect()->route('alumni.index')
            ->with('success', 'Data alumni berhasil diperbarui');
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        
        // Hapus foto
        if (Storage::disk('public')->exists($alumni->foto)) {
            Storage::disk('public')->delete($alumni->foto);
        }
        
        $alumni->delete();

        return redirect()->route('alumni.index')
            ->with('success', 'Data alumni berhasil dihapus');
    }
}