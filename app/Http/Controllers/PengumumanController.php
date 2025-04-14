<?php
namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::with('admin')->get();
        return view('pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('pengumuman.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'judul' => 'required|string|max:100',
            'isi' => 'required|string',
            'tanggal_terbit' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Pengumuman::create($request->all());

        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil dibuat');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.show', compact('pengumuman'));
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $admins = Admin::all();
        return view('pengumuman.edit', compact('pengumuman', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_admin' => 'required|exists:admins,id_admin',
            'judul' => 'required|string|max:100',
            'isi' => 'required|string',
            'tanggal_terbit' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->update($request->all());

        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus');
    }
}
