<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Admin;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with(['admin', 'kelas'])->get();
        return view('admin.siswa.index', compact('siswa'));
    }

    public function create()
    {
        $admins = Admin::all();
        $kelas = Kelas::all();
        return view('admin.siswa.create', compact('admins', 'kelas'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'nisn' => 'required|string|max:20|unique:siswa,nisn',
            'kelas_id' => 'required|exists:kelas,id_kelas',
            'tahun_masuk' => 'required|date_format:Y',
            'alamat' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Siswa::create($request->all());

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function show($id)
    {
        $siswa = Siswa::with(['admin', 'kelas'])->findOrFail($id);
        return view('admin.siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $admins = Admin::all();
        $kelas = Kelas::all();
        return view('admin.siswa.edit', compact('siswa', 'admins', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'nisn' => 'required|string|max:20|unique:siswa,nisn,' . $siswa->id_siswa . ',id_siswa',
            'kelas_id' => 'required|exists:kelas,id_kelas',
            'tahun_masuk' => 'required|date_format:Y',
            'alamat' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $siswa->update($request->all());

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.siswa.index')
            ->with('success', 'Data siswa berhasil dihapus');
    }
}
