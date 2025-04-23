<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::with('admin')->get();
        return view('admin.alumni.index', compact('alumni'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('admin.alumni.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['id_admin', 'nama', 'deskripsi']);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/alumni', $fotoName);
            $data['foto'] = $fotoName;
        }

        Alumni::create($data);

        return redirect()->route('admin.alumni.index')->with('success', 'Data alumni berhasil ditambahkan');
    }

    public function show(Alumni $alumni)
    {
        return view('admin.alumni.show', compact('alumni'));
    }

    public function edit(Alumni $alumni)
    {
        $admins = Admin::all();
        return view('admin.alumni.edit', compact('alumni', 'admins'));
    }

    public function update(Request $request, Alumni $alumni)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admin,id_admin',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['id_admin', 'nama', 'deskripsi']);

        if ($request->hasFile('foto')) {
            if ($alumni->foto) {
                Storage::delete('public/alumni/' . $alumni->foto);
            }
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/alumni', $fotoName);
            $data['foto'] = $fotoName;
        }

        $alumni->update($data);

        return redirect()->route('admin.alumni.index')->with('success', 'Data alumni berhasil diperbarui');
    }

    public function destroy(Alumni $alumni)
    {
        if ($alumni->foto) {
            Storage::delete('public/alumni/' . $alumni->foto);
        }

        $alumni->delete();

        return redirect()->route('admin.alumni.index')->with('success', 'Data alumni berhasil dihapus');
    }
}
