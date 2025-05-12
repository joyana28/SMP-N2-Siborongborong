<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::with('admin')->paginate(10);
        return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'pembina' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoFile->move(public_path('ekstrakurikuler'), $fotoName); 
            $foto = $fotoName;
        }

        Ekstrakurikuler::create([
            'id_admin' => session('admin_id'),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }
    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'pembina' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        if ($request->hasFile('foto')) {
        $oldPath = public_path('ekstrakurikuler/' . $ekstrakurikuler->foto);
        if ($ekstrakurikuler->foto && file_exists($oldPath)) {
            unlink($oldPath); 
        }

            $fotoFile = $request->file('foto');
            $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoFile->move(public_path('ekstrakurikuler'), $fotoName);
            $ekstrakurikuler->foto = $fotoName;
        }

        $ekstrakurikuler->nama = $request->nama;
        $ekstrakurikuler->deskripsi = $request->deskripsi;
        $ekstrakurikuler->pembina = $request->pembina;
        $ekstrakurikuler->jadwal = $request->jadwal;
        $ekstrakurikuler->save();

        return redirect()->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $path = public_path('ekstrakurikuler/' . $ekstrakurikuler->foto);
        if ($ekstrakurikuler->foto && file_exists($path)) {
        unlink($path);
        }

        $ekstrakurikuler->delete();

        return redirect()->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil dihapus!');
    }
}
