<?php
namespace App\Http\Controllers;

use App\Models\TenagaPengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TenagaPengajarController extends Controller
{
    public function index()
    {
        $tenagaPengajars = TenagaPengajar::with('admin')->get();
        return response()->json([
            'success' => true,
            'data' => $tenagaPengajars
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'nama_kepalasekolah' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'golongan' => 'required|string|max:50',
            'nama_guru' => 'required|string|max:100',
            'bidang' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $tenagaPengajar = TenagaPengajar::create([
            'id_admin' => $request->id_admin,
            'nama_kepalasekolah' => $request->nama_kepalasekolah,
            'deskripsi' => $request->deskripsi,
            'golongan' => $request->golongan,
            'nama_guru' => $request->nama_guru,
            'bidang' => $request->bidang,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Tenaga Pengajar berhasil ditambahkan',
            'data' => $tenagaPengajar
        ], 201);
    }

    public function show($id)
    {
        $tenagaPengajar = TenagaPengajar::with('admin')->find($id);
        
        if (!$tenagaPengajar) {
            return response()->json([
                'success' => false,
                'message' => 'Tenaga Pengajar tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $tenagaPengajar
        ]);
    }

    public function update(Request $request, $id)
    {
        $tenagaPengajar = TenagaPengajar::find($id);
        
        if (!$tenagaPengajar) {
            return response()->json([
                'success' => false,
                'message' => 'Tenaga Pengajar tidak ditemukan'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'id_admin' => 'exists:admins,id_admin',
            'nama_kepalasekolah' => 'string|max:100',
            'deskripsi' => 'nullable|string',
            'golongan' => 'string|max:50',
            'nama_guru' => 'string|max:100',
            'bidang' => 'string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $tenagaPengajar->id_admin = $request->id_admin ?? $tenagaPengajar->id_admin;
        $tenagaPengajar->nama_kepalasekolah = $request->nama_kepalasekolah ?? $tenagaPengajar->nama_kepalasekolah;
        $tenagaPengajar->deskripsi = $request->deskripsi ?? $tenagaPengajar->deskripsi;
        $tenagaPengajar->golongan = $request->golongan ?? $tenagaPengajar->golongan;
        $tenagaPengajar->nama_guru = $request->nama_guru ?? $tenagaPengajar->nama_guru;
        $tenagaPengajar->bidang = $request->bidang ?? $tenagaPengajar->bidang;
        $tenagaPengajar->save();

        return response()->json([
            'success' => true,
            'message' => 'Tenaga Pengajar berhasil diperbarui',
            'data' => $tenagaPengajar
        ]);
    }

    public function destroy($id)
    {
        $tenagaPengajar = TenagaPengajar::find($id);
        
        if (!$tenagaPengajar) {
            return response()->json([
                'success' => false,
                'message' => 'Tenaga Pengajar tidak ditemukan'
            ], 404);
        }

        $tenagaPengajar->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tenaga Pengajar berhasil dihapus'
            ]);
    }
}