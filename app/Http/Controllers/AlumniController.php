<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    // Tampilkan semua data alumni (untuk admin)
    public function index()
    {
        $alumni = Alumni::with('admin')->paginate(10);
        return view('admin.alumni.index', compact('alumni'));
    }

    // Tampilkan form tambah alumni
    public function create()
    {
        return view('admin.alumni.create');
    }

    // Simpan data alumni baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun_lulus' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $filename = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('uploads/alumni'), $filename);
            $data['foto'] = $filename;
        }

        // Tambahkan id_admin dari session
        $data['id_admin'] = session('id_admin');

        Alumni::create($data);

        return redirect()->route('admin.alumni.index')->with('success', 'Data alumni berhasil ditambahkan.');
    }

    // Tampilkan profil alumni untuk frontend
    public function showFrontend()
    {
        $alumni = Alumni::latest()->firstOrFail();  // Lebih clean, tidak perlu if

        return view('alumni.show', compact('alumni'));
    }

    // Tampilkan form edit alumni
    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }

    // Proses update data alumni
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

        // Update foto jika ada
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

    // Hapus data alumni
    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);

        if ($alumni->foto && file_exists(public_path('alumni/' . $alumni->foto))) {
            unlink(public_path('alumni/' . $alumni->foto));
        }

        $alumni->delete();

        return redirect()->route('admin.alumni.index')
            ->with('success', 'Data alumni berhasil dihapus!');
    }
}
