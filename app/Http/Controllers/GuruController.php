<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::with('admin')->get();
        return view('admin.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        return view('guru.create', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:30|unique:guru,nip',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        
        // Upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $path = $foto->storeAs('public/guru', $filename);
            $data['foto'] = $filename;
        }

        Guru::create($data);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::with('admin')->findOrFail($id);
        return view('guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        $admins = Admin::all();
        return view('guru.edit', compact('guru', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id',
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:30|unique:guru,nip,' . $id . ',id_guru',
            'golongan' => 'required|string|max:50',
            'bidang' => 'required|string|max:100',
            'no_telp' => 'required|string|max:15',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        
        // Upload foto baru jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($guru->foto) {
                Storage::delete('public/guru/' . $guru->foto);
            }
            
            // Upload foto baru
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $path = $foto->storeAs('public/guru', $filename);
            $data['foto'] = $filename;
        }

        $guru->update($data);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        
        // Hapus foto
        if ($guru->foto) {
            Storage::delete('public/guru/' . $guru->foto);
        }
        
        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}