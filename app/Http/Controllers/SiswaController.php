<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Admin;
use App\Models\Guru;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('admin')->get();
        return view('admin.siswa.index', compact('siswa'));
    }
    
    public function create()
    {
        $admins = Admin::all();
        $guru = Guru::all();
        return view('admin.siswa.create', compact('admins', 'guru'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer|min:0',
            'jumlah_siswa_l' => 'required|integer|min:0',
            'jumlah_siswa_p' => 'required|integer|min:0',
            'tahun' => 'required|date_format:Y',
            'history' => 'nullable|string',
            'wali_kelas' => 'required|string|max:50',
        ]);
        
        // Validasi jumlah siswa
        $total = $request->jumlah_siswa_l + $request->jumlah_siswa_p;
        if ($total != $request->jumlah_siswa) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['jumlah_siswa' => 'Jumlah siswa laki-laki dan perempuan tidak sesuai dengan total siswa.']);
        }
        
        Siswa::create($request->all());
        
        return redirect()->route('admin.siswa.index')
                        ->with('success', 'Data Siswa berhasil ditambahkan.');
    }
    
    public function show($id)
    {
        $siswa = Siswa::with('admin')->findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }
    
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $admins = Admin::all();
        $guru = Guru::all();
        return view('siswa.edit', compact('siswa', 'admins', 'guru'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_admin' => 'required|exists:admin,id_admin',
            'nama_kelas' => 'required|string|max:50',
            'jumlah_siswa' => 'required|integer|min:0',
            'jumlah_siswa_l' => 'required|integer|min:0',
            'jumlah_siswa_p' => 'required|integer|min:0',
            'tahun' => 'required|date_format:Y',
            'history' => 'nullable|string',
            'wali_kelas' => 'required|string|max:50',
        ]);
        
        // Validasi jumlah siswa
        $total = $request->jumlah_siswa_l + $request->jumlah_siswa_p;
        if ($total != $request->jumlah_siswa) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['jumlah_siswa' => 'Jumlah siswa laki-laki dan perempuan tidak sesuai dengan total siswa.']);
        }
        
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        
        return redirect()->route('admin.siswa.index')
                        ->with('success', 'Data Siswa berhasil diperbarui.');
    }
    
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        
        return redirect()->route('admin.siswa.index')
                        ->with('success', 'Data Siswa berhasil dihapus.');
    }
}