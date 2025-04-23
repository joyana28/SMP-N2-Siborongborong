<?php
namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::with('admin')->get();
        return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }
    
    public function create()
    {
        $admins = Admin::all();
        return view('admin.ekstrakurikuler.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'pembina' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
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
            $filePath = $file->storeAs('eskul', $fileName, 'public');

            Ekstrakurikuler::create([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'pembina' => $request->pembina,
                'jadwal' => $request->jadwal,
                'foto' => $filePath,
            ]);

            return redirect()->route('eskul.index')
                ->with('success', 'Data ekstrakurikuler berhasil dibuat');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah foto');
    }

    public function show($id)
    {
        $eskul = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.show', compact('eskul'));
    }

    public function edit($id)
    {
        $eskul = Ekstrakurikuler::findOrFail($id);
        $admins = Admin::all();
        return view('admin.ekstrakurikuler.edit', compact('eskul', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'pembina' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $eskul = Ekstrakurikuler::findOrFail($id);
        
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if (Storage::disk('public')->exists($eskul->foto)) {
                Storage::disk('public')->delete($eskul->foto);
            }
            
            // Upload foto baru
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('eskul', $fileName, 'public');
            
            $eskul->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'pembina' => $request->pembina,
                'jadwal' => $request->jadwal,
                'foto' => $filePath,
            ]);
        } else {
            $eskul->update([
                'id_admin' => $request->id_admin,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'pembina' => $request->pembina,
                'jadwal' => $request->jadwal,
            ]);
        }

        return redirect()->route('eskul.index')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui');
    }

    public function destroy($id)
    {
        $eskul = Ekstrakurikuler::findOrFail($id);
        
        // Hapus foto
        if (Storage::disk('public')->exists($eskul->foto)) {
            Storage::disk('public')->delete($eskul->foto);
        }
        
        $eskul->delete();

        return redirect()->route('eskul.index')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus');
    }
}