<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::with('admin')->paginate(10);
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('admin.pengumuman.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'judul' => 'required|string|max:100',
            'isi' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_terbit',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoPath = $fotoFile->storeAs('public/pengumuman', $fotoName);
            $foto = $fotoName;
        }

        Pengumuman::create([
            'id_admin' => $request->id_admin,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'foto' => $foto ?? null,
        ]);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil dibuat');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::with('admin')->findOrFail($id);
        return view('admin.pengumuman.show', compact('pengumuman'));
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $admins = Admin::all();
        return view('admin.pengumuman.edit', compact('pengumuman', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'judul' => 'required|string|max:100',
            'isi' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_terbit',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $pengumuman = Pengumuman::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($pengumuman->foto && Storage::exists('public/pengumuman/' . $pengumuman->foto)) {
                Storage::delete('public/pengumuman/' . $pengumuman->foto);
            }

            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoPath = $fotoFile->storeAs('public/pengumuman', $fotoName);
            $pengumuman->foto = $fotoName;
        }

        $pengumuman->id_admin = $request->id_admin;
        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;
        $pengumuman->tanggal_terbit = $request->tanggal_terbit;
        $pengumuman->tanggal_berakhir = $request->tanggal_berakhir;
        $pengumuman->save();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if ($pengumuman->foto && Storage::exists('public/pengumuman/' . $pengumuman->foto)) {
            Storage::delete('public/pengumuman/' . $pengumuman->foto);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus');
    }
}
