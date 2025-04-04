<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('admin')->get();
        return response()->json([
            'success' => true,
            'data' => $siswas
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'jumlah_siswa' => 'required|integer|min:0',
            'nama_kelas' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $siswa = Siswa::create([
            'id_admin' => $request->id_admin,
            'jumlah_siswa' => $request->jumlah_siswa,
            'nama_kelas' => $request->nama_kelas,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data kelas siswa berhasil ditambahkan',
            'data' => $siswa
        ], 201);
    }

    public function show($id)
    {
        $siswa = Siswa::with('admin')->find($id);
        
        if (!$siswa) {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas siswa tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $siswa
        ]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        
        if (!$siswa) {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas siswa tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_admin' => 'exists:admins,id_admin',
            'jumlah_siswa' => 'integer|min:0',
            'nama_kelas' => 'string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $siswa->id_admin = $request->id_admin ?? $siswa->id_admin;
        $siswa->jumlah_siswa = $request->jumlah_siswa ?? $siswa->jumlah_siswa;
        $siswa->nama_kelas = $request->nama_kelas ?? $siswa->nama_kelas;
        $siswa->save();

        return response()->json([
            'success' => true,
            'message' => 'Data kelas siswa berhasil diperbarui',
            'data' => $siswa
        ]);
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        
        if (!$siswa) {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas siswa tidak ditemukan'
            ], 404);
        }

        $siswa->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data kelas siswa berhasil dihapus'
        ]);
    }
}
