<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::with('admin')->paginate(10);
        return view('admin.alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('admin.alumni.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'tahun_lulus' => 'nullable|date_format:Y',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $foto = null;
        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoFile->move(public_path('alumni'), $fotoName); 
            $foto = $fotoName;
        }

        Alumni::create([
            'id_admin' => session('admin_id'),
            'nama' => $request->nama,
            'tahun_lulus' => $request->tahun_lulus,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.alumni.index')
            ->with('success', 'Data alumni berhasil ditambahkan!');
    }

    public function showFrontend()
    {
        $alumni = Alumni::latest()->first();

        if (!$alumni) {
            return redirect()->route('alumni.show')->with('error', 'Alumni tidak ditemukan');
        }

        return view('alumni.show', compact('alumni'));
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'tahun_lulus' => 'nullable|date_format:Y',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $alumni = Alumni::findOrFail($id);

        if ($request->hasFile('foto')) {
        $oldPath = public_path('alumni/' . $alumni->foto);
        if ($alumni->foto && file_exists($oldPath)) {
            unlink($oldPath); 
        }

            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoFile->move(public_path('alumni'), $fotoName);
            $alumni->foto = $fotoName;
        }

        $alumni->nama = $request->nama;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->deskripsi = $request->deskripsi;
        $alumni->save();

        return redirect()->route('admin.alumni.index')
            ->with('success', 'Data alumni berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);

        $path = public_path('alumni/' . $alumni->foto);
        if ($alumni->foto && file_exists($path)) {
        unlink($path);
        }
        $alumni->delete();

        return redirect()->route('admin.alumni.index')
            ->with('success', 'Data alumni berhasil dihapus!');
    }
}
