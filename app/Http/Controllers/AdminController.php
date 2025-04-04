<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return response()->json([
            'success' => true,
            'data' => $admins
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:admins',
            'email' => 'required|email|max:100|unique:admins',
            'password' => 'required|string|min:6|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $admin = Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Admin berhasil ditambahkan',
            'data' => $admin
        ], 201);
    }

    public function show($id)
    {
        $admin = Admin::find($id);
        
        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'Admin tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'data' => $admin
        ]);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        
        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'Admin tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'username' => 'string|max:50|unique:admins,username,'.$id.',id_admin',
            'email' => 'email|max:100|unique:admins,email,'.$id.',id_admin',
            'password' => 'nullable|string|min:6|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $admin->username = $request->username ?? $admin->username;
        $admin->email = $request->email ?? $admin->email;
        
        if ($request->has('password')) {
            $admin->password = Hash::make($request->password);
        }
        
        $admin->save();

        return response()->json([
            'success' => true,
            'message' => 'Admin berhasil diperbarui',
            'data' => $admin
        ]);
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        
        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'Admin tidak ditemukan'
            ], 404);
        }

        $admin->delete();

        return response()->json([
            'success' => true,
            'message' => 'Admin berhasil dihapus'
        ]);
    }
}
