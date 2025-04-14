<?php
namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Admin;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with(['admin', 'waliKelas'])->get();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        $admins = Admin::all();
        $guru = Guru::all();
        return view('kelas.create', compact('admins', 'guru'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer',
            'jumlah_siswa_L' => 'required|integer|min:0',
            'jumlah_siswa_P' => 'required|integer|min:0',
            'tahun' => 'required|date_format:Y',
            'history' => 'nullable|string',
            'wali_kelas_id' => 'required|exists:tenaga_pendidik,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Validasi jumlah siswa
        $totalSiswa = $request->jumlah_siswa_L + $request->jumlah_siswa_P;
        if ($totalSiswa != $request->jumlah_siswa) {
            return redirect()->back()
                ->withErrors(['jumlah_siswa' => 'Jumlah siswa laki-laki dan perempuan tidak sesuai dengan total siswa'])
                ->withInput();
        }

        Kelas::create($request->all());

        return redirect()->route('kelas.index')
            ->with('success', 'Data kelas berhasil dibuat');
    }

    public function show($id)
    {
        $kelas = Kelas::with(['admin', 'waliKelas'])->findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $admins = Admin::all();
        $guru = Guru::all();
        return view('kelas.edit', compact('kelas', 'admins', 'guru'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer',
            'jumlah_siswa_L' => 'required|integer|min:0',
            'jumlah_siswa_P' => 'required|integer|min:0',
            'tahun' => 'required|date_format:Y',
            'history' => 'nullable|string',
            'wali_kelas_id' => 'required|exists:tenaga_pendidik,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Validasi jumlah siswa
        $totalSiswa = $request->jumlah_siswa_L + $request->jumlah_siswa_P;
        if ($totalSiswa != $request->jumlah_siswa) {
            return redirect()->back()
                ->withErrors(['jumlah_siswa' => 'Jumlah siswa laki-laki dan perempuan tidak sesuai dengan total siswa'])
                ->withInput();
        }

        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->all());

        return redirect()->route('kelas.index')
            ->with('success', 'Data kelas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')
            ->with('success', 'Data kelas berhasil dihapus');
    }
}