<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::with('admin')->paginate(10);
        return view('admin.prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
            'jenis' => 'required|in:akademik,non-akademik',
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
            $fotoFile->move(public_path('prestasi'), $fotoName); 
            $foto = $fotoName;
        }

        Prestasi::create([
            'id_admin' => session('admin_id'),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Data prestasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jenis' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $prestasi->nama = $request->nama;
        $prestasi->tanggal = $request->tanggal;
        $prestasi->jenis = $request->jenis;
        $prestasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Hapus file lama jika ada
            if ($prestasi->foto && file_exists(public_path('prestasi/' . $prestasi->foto))) {
                unlink(public_path('prestasi/' . $prestasi->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('prestasi'), $filename);

            $prestasi->foto = $filename;
        }

        $prestasi->save();

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil diperbarui');
    }

    public function akademik()
    {
        $prestasiAkademik = Prestasi::where('jenis', 'akademik')->paginate(10);
        return view('prestasi.akademik', compact('prestasiAkademik'));
    }

    public function nonAkademik()
    {
        $prestasiNonAkademik = Prestasi::where('jenis', 'non-akademik')->paginate(10);
        return view('prestasi.nonakademik', compact('prestasiNonAkademik'));
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $path = public_path('prestasi/' . $prestasi->foto);
        if ($prestasi->foto && file_exists($path)) {
            unlink($path);
        }

        $prestasi->delete();

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Data prestasi berhasil dihapus');
    }
}
