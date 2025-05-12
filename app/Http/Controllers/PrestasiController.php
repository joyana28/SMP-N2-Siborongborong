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

        $prestasi = Prestasi::findOrFail($id);

        if ($request->hasFile('foto')) {
        $oldPath = public_path('prestasi/' . $prestasi->foto);
        if ($prestasi->foto && file_exists($oldPath)) {
            unlink($oldPath); 
        }

            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoFile->storeAs('prestasi', $fotoName);
            $prestasi->foto = $fotoName;
        }

        $prestasi->id_admin = session('admin_id');
        $prestasi->nama = $request->nama;
        $prestasi->deskripsi = $request->deskripsi;
        $prestasi->tanggal = $request->tanggal;
        $prestasi->jenis = $request->jenis;
        $prestasi->save();

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Data prestasi berhasil diperbarui');
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
