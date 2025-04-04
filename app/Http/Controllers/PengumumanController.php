<?php
namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::with('admin')->get();
        return response()->json([
            'success' => true,
            'data' => $pengumumans
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'isi' => 'required|string',
            'tanggal_terbit' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }
        $pengumuman = Pengumuman::create([
            'id_admin' => $request->id_admin,
            'isi' => $request->isi,
            'tanggal_terbit' => $request->tanggal_terbit,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pengumuman berhasil ditambahkan',
            'data' => $pengumuman
        ], 201);
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::with('admin')->find($id);
        
        if (!$pengumuman) {
            return response()->json([
                'success' => false,
                'message' => 'Pengumuman tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'data' => $pengumuman
        ]);
    }

    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::find($id);
        
        if (!$pengumuman) {
            return response()->json([
                'success' => false,
                'message' => 'Pengumuman tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_admin' => 'exists:admins,id_admin',
            'isi' => 'string',
            'tanggal_terbit' => 'date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

         $pengumuman->id_admin = $request->id_admin ?? $pengumuman->id_admin;
        $pengumuman->isi = $request->isi ?? $pengumuman->isi;
        $pengumuman->tanggal_terbit = $request->tanggal_terbit ?? $pengumuman->tanggal_terbit;
        $pengumuman->save();

        return response()->json([
            'success' => true,
            'message' => 'Pengumuman berhasil diperbarui',
            'data' => $pengumuman
        ]);
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        
        if (!$pengumuman) {
            return response()->json([
                'success' => false,
                'message' => 'Pengumuman tidak ditemukan'
            ], 404);
        }

        $pengumuman->delete();

        return response()->json([
            'success' => true,
            'message' => 'Pengumuman berhasil dihapus'
        ]);
    }
}

