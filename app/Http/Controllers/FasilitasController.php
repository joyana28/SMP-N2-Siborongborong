<?php
namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::with('admin')->get();
        return response()->json([
            'success' => true,
            'data' => $fasilitas
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

        $fasilitas = Fasilitas::create([
            'id_admin' => $request->id_admin,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil ditambahkan',
            'data' => $fasilitas
        ], 201);
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::with('admin')->find($id);
        
        if (!$fasilitas) {
            return response()->json([
                'success' => false,
                'message' => 'Fasilitas tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $fasilitas
        ]);
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        
        if (!$fasilitas) {
            return response()->json([
                'success' => false,
                'message' => 'Fasilitas tidak ditemukan'
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

        $fasilitas->id_admin = $request->id_admin ?? $fasilitas->id_admin;
        $fasilitas->nama = $request->nama ?? $fasilitas->nama;
        $fasilitas->deskripsi = $request->deskripsi ?? $fasilitas->deskripsi;
        $fasilitas->save();

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil diperbarui',
            'data' => $fasilitas
        ]);
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        
        if (!$fasilitas) {
            return response()->json([
                'success' => false,
                'message' => 'Fasilitas tidak ditemukan'
            ], 404);
        }

        $fasilitas->delete();

        return response()->json([
            'success' => true,
            'message' => 'Fasilitas berhasil dihapus'
        ]);
    }
}
