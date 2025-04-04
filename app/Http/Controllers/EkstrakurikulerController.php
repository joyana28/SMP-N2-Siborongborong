<?php
namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::with('admin')->get();
        return response()->json([
            'success' => true,
            'data' => $ekstrakurikulers
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

        $ekstrakurikuler = Ekstrakurikuler::create([
            'id_admin' => $request->id_admin,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Ekstrakurikuler berhasil ditambahkan',
            'data' => $ekstrakurikuler
        ], 201);
    }

    public function show($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::with('admin')->find($id);
        
        if (!$ekstrakurikuler) {
            return response()->json([
                'success' => false,
                'message' => 'Ekstrakurikuler tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $ekstrakurikuler
        ]);
    }

    public function update(Request $request, $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::find($id);
        
        if (!$ekstrakurikuler) {
            return response()->json([
                'success' => false,
                'message' => 'Ekstrakurikuler tidak ditemukan'
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

        $ekstrakurikuler->id_admin = $request->id_admin ?? $ekstrakurikuler->id_admin;
        $ekstrakurikuler->nama = $request->nama ?? $ekstrakurikuler->nama;
        $ekstrakurikuler->deskripsi = $request->deskripsi ?? $ekstrakurikuler->deskripsi;
        $ekstrakurikuler->save();

        return response()->json([
            'success' => true,
            'message' => 'Ekstrakurikuler berhasil diperbarui',
            'data' => $ekstrakurikuler
        ]);
    }

    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::find($id);
        
        if (!$ekstrakurikuler) {
            return response()->json([
                'success' => false,
                'message' => 'Ekstrakurikuler tidak ditemukan'
            ], 404);
        }

        $ekstrakurikuler->delete();

        return response()->json([
            'success' => true,
            'message' => 'Ekstrakurikuler berhasil dihapus'
        ]);
    }
}
