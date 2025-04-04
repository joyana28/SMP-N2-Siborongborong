<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::with('admin')->get();
        return response()->json([
            'success' => true,
            'data' => $alumnis
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $alumni = Alumni::create([
            'id_admin' => $request->id_admin,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Alumni berhasil ditambahkan',
            'data' => $alumni
        ], 201);
    }

    public function show($id)
    {
        $alumni = Alumni::with('admin')->find($id);
        
        if (!$alumni) {
            return response()->json([
                'success' => false,
                'message' => 'Alumni tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $alumni
        ]);
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::find($id);
        
        if (!$alumni) {
            return response()->json([
                'success' => false,
                'message' => 'Alumni tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_admin' => 'exists:admins,id_admin',
            'nama' => 'string|max:100',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $alumni->id_admin = $request->id_admin ?? $alumni->id_admin;
        $alumni->nama = $request->nama ?? $alumni->nama;
        $alumni->deskripsi = $request->deskripsi ?? $alumni->deskripsi;
        $alumni->save();

        return response()->json([
            'success' => true,
            'message' => 'Alumni berhasil diperbarui',
            'data' => $alumni
        ]);
    }

    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        
        if (!$alumni) {
            return response()->json([
            'success' => false,
            'message' => 'Alumni tidak ditemukan'
        ], 404);
    }

    $alumni->delete();

    return response()->json([
        'success' => true,
        'message' => 'Alumni berhasil dihapus'
    ]);
}
}
