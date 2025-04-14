<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::with('admin')->get();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('guru.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50|unique:guru,nip',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('guru', $fileName, 'public');

            Guru::create([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'nip' => $request->nip,
                'golongan' => $request->golongan,
                'bidang' => $request->bidang,
                'no_telp' => $request->no_telp,
                'foto' => $filePath,
            ]);

            return redirect()->route('guru.index')
                ->with('success', 'Data guru berhasil dibuat');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah foto');
    }

    public function show($id)
    {
        $guru = Guru::with(['admin', 'kelasWali'])->findOrFail($id);
        return view('guru.show', compact('guru'));
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        $admins = Admin::all();
        return view('guru.edit', compact('guru', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:50|unique:guru,nip,' . $id . ',id_guru',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if (Storage::disk('public')->exists($guru->foto)) {
                Storage::disk('public')->delete($guru->foto);
            }
            
            // Upload foto baru
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('guru', $fileName, 'public');
            
            $guru->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'nip' => $request->nip,
                'golongan' => $request->golongan,
                'bidang' => $request->bidang,
                'no_telp' => $request->no_telp,
                'foto' => $filePath,
            ]);
        } else {
            $guru->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'nip' => $request->nip,
                'golongan' => $request->golongan,
                'bidang' => $request->bidang,
                'no_telp' => $request->no_telp,
            ]);
        }

        return redirect()->route('guru.index')
            ->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        
        // Hapus foto
        if (Storage::disk('public')->exists($guru->foto)) {
            Storage::disk('public')->delete($guru->foto);
        }
        
        $guru->delete();

        return redirect()->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus');
    }
}