<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ada view login.blade.php
    }

    public function login(Request $request)
    {
        // Validasi input dengan tambahan username
        $validated = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari admin berdasarkan email
        $admin = Admin::where('email', $request->email)
                      ->where('username', $request->username)
                      ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {

            session([
                'admin_logged_in' => true, 
                'admin_id' => $admin->id_admin,
                'admin_username' => $admin->username
            ]);

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['login' => 'Data login tidak sesuai.']);
        }
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_id', 'admin_username']);
        return redirect()->route('admin.login');
    }
}