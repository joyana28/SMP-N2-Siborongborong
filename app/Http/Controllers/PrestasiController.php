<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::with('admin')->get();
        return response()->json([
            'success' => true,
            'data' => $prestasis
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $prestasi = Prestasi::create([
            'id_admin' => $request->id_admin,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Prestasi berhasil ditambahkan',
            'data' => $prestasi
        ], 201);
    }

    public function show($id)
    {
        $prestasi = Prestasi::with('admin')->find($id);
        
        if (!$prestasi) {
            return response()->json([
                'success' => false,
                'message' => 'Prestasi tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $prestasi
        ]);
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::find($id);
        
        if (!$prestasi) {
            return response()->json([
                'success' => false,
                'message' => 'Prestasi tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_admin' => 'exists:admins,id_admin',
            'nama' => 'string|max:100',
            'tanggal' => 'date',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $prestasi->id_admin = $request->id_admin ?? $prestasi->id_admin;
        $prestasi->nama = $request->nama ?? $prestasi->nama;
        $prestasi->tanggal = $request->tanggal ?? $prestasi->tanggal;
        $prestasi->deskripsi = $request->deskripsi ?? $prestasi->deskripsi;
        $prestasi->save();

        return response()->json([
            'success' => true,
            'message' => 'Prestasi berhasil diperbarui',
            'data' => $prestasi
        ]);
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);
        
        if (!$prestasi) {
            return response()->json([
                'success' => false,
                'message' => 'Prestasi tidak ditemukan'
            ], 404);
        }

        $prestasi->delete();

        return response()->json([
            'success' => true,
            'message' => 'Prestasi berhasil dihapus'
        ]);
    }
}
