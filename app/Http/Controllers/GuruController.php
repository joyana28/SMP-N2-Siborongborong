<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Guru; 
use Illuminate\Http\Request; 
 
class GuruController extends Controller 
{ 
    // Tampilkan semua data guru (untuk admin) 
    public function index() 
    { 
        $guru = Guru::with('admin')->get(); 
        return view('admin.guru.index', compact('guru')); 
    } 
 
    // Tampilkan daftar guru untuk frontend publik 
    public function daftarGuru() 
    { 
        $guru = Guru::orderBy('nama', 'asc')->get(); 
        return view('guru.index', compact('guru')); 
    } 
 
    // Tampilkan form tambah guru 
    public function create() 
    { 
        return view('admin.guru.create'); 
    } 
 
    // Simpan data guru baru 
    public function store(Request $request) 
    { 
        $request->validate([ 
            'nama' => 'required|string|max:100', 
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:20', 
            'foto' => 'nullable|image|max:2048', 
        ]); 
 
        $data = $request->except('foto'); 
        $data['id_admin'] = session('admin_id'); 
 
        if ($request->hasFile('foto')) { 
            $foto = $request->file('foto'); 
            $fotoName = time() . '_' . $foto->getClientOriginalName(); 
            $foto->move(public_path('guru'), $fotoName); 
            $data['foto'] = $fotoName; 
        } 
 
        Guru::create($data); 
 
        return redirect()->route('admin.guru.index') 
            ->with('success', 'Data Guru berhasil ditambahkan.'); 
    } 
 
    // Tampilkan detail guru
    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.show', compact('guru'));
    }
 
    // Tampilkan form edit guru 
    public function edit($id) 
    { 
        $guru = Guru::findOrFail($id); 
        return view('admin.guru.edit', compact('guru')); 
    } 
 
    // Proses update data guru 
    public function update(Request $request, $id) 
    { 
        $request->validate([ 
            'nama' => 'required|string|max:100', 
            'nip' => 'required|string|max:50',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:20', 
            'foto' => 'nullable|image|max:2048', 
        ]); 
 
        $guru = Guru::findOrFail($id); 
        $data = $request->except('foto'); 
 
        if ($request->hasFile('foto')) { 
            // Hapus foto lama jika ada 
            if ($guru->foto && file_exists(public_path('guru/' . $guru->foto))) { 
                unlink(public_path('guru/' . $guru->foto)); 
            } 
 
            $foto = $request->file('foto'); 
            $fotoName = time() . '_' . $foto->getClientOriginalName(); 
            $foto->move(public_path('guru'), $fotoName); 
            $data['foto'] = $fotoName; 
        } 
 
        $guru->update($data); 
 
        return redirect()->route('admin.guru.index') 
            ->with('success', 'Data Guru berhasil diperbarui.'); 
    } 
 
    // Hapus data guru 
    public function destroy($id) 
    { 
        $guru = Guru::findOrFail($id); 
 
        // Hapus file foto jika ada 
        if ($guru->foto && file_exists(public_path('guru/' . $guru->foto))) { 
            unlink(public_path('guru/' . $guru->foto)); 
        } 
 
        $guru->delete(); 
 
        return redirect()->route('admin.guru.index') 
            ->with('success', 'Data Guru berhasil dihapus.'); 
    } 
}