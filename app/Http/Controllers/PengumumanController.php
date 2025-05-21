<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'judul' => 'required|string|max:100',
        'isi' => 'required|string',
        'tanggal_terbit' => 'required|date',
        'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_terbit',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'lampiran' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:5120', 
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $foto = null;
    if ($request->hasFile('foto')) {
        $fotoFile = $request->file('foto');
        $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
        $fotoFile->move(public_path('pengumuman'), $fotoName); 
        $foto = $fotoName;
    }

    $lampiran = null;
    if ($request->hasFile('lampiran')) {
        $lampiranFile = $request->file('lampiran');
        $lampiranName = time() . '_' . $lampiranFile->getClientOriginalName();
        $lampiranFile->move(public_path('pengumuman/lampiran'), $lampiranName); 
        $lampiran = $lampiranName;
    }

    Pengumuman::create([
        'id_admin' => session('admin_id'),
        'judul' => $request->judul,
        'isi' => $request->isi,
        'tanggal_terbit' => $request->tanggal_terbit,
        'tanggal_berakhir' => $request->tanggal_berakhir,
        'foto' => $foto,
        'lampiran' => $lampiran,
    ]);

    return redirect()->route('admin.pengumuman.index')
        ->with('success', 'Pengumuman berhasil dibuat');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
    $validator = Validator::make($request->all(), [
        'judul' => 'required|string|max:100',
        'isi' => 'required|string',
        'tanggal_terbit' => 'required|date',
        'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_terbit',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'lampiran' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:5120',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $pengumuman = Pengumuman::findOrFail($id);

    if ($request->hasFile('foto')) {
        $oldPath = public_path('pengumuman/' . $pengumuman->foto);
        if ($pengumuman->foto && file_exists($oldPath)) {
            unlink($oldPath); 
        }

        $fotoFile = $request->file('foto');
        $fotoName = time() . '_' . $fotoFile->getClientOriginalName();
        $fotoFile->move(public_path('pengumuman'), $fotoName);
        $pengumuman->foto = $fotoName;
    }

    if ($request->hasFile('lampiran')) {
        $oldLampiran = public_path('pengumuman/lampiran/' . $pengumuman->lampiran);
        if ($pengumuman->lampiran && file_exists($oldLampiran)) {
            unlink($oldLampiran);
        }

        $lampiranFile = $request->file('lampiran');
        $lampiranName = time() . '_' . $lampiranFile->getClientOriginalName();
        $lampiranFile->move(public_path('pengumuman/lampiran'), $lampiranName);
        $pengumuman->lampiran = $lampiranName;
    }

    $pengumuman->id_admin = session('admin_id');
    $pengumuman->judul = $request->judul;
    $pengumuman->isi = $request->isi;
    $pengumuman->tanggal_terbit = $request->tanggal_terbit;
    $pengumuman->tanggal_berakhir = $request->tanggal_berakhir;
    $pengumuman->save();

    return redirect()->route('admin.pengumuman.index')
        ->with('success', 'Pengumuman berhasil diperbarui');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::with('admin')->findOrFail($id);
        return view('admin.pengumuman.show', compact('pengumuman'));
    }

    public function blog()
    {
    $pengumuman = Pengumuman::orderBy('tanggal_terbit', 'desc')->take(3)->get(); 
    return view('home', compact('pengumuman'));
    }

    public function showBlog($id)
    {
    $pengumuman = Pengumuman::findOrFail($id);
    return view('pengumuman.blog-show', compact('pengumuman'));
    }

    public function destroy($id)
    {
    $pengumuman = Pengumuman::findOrFail($id);

    $path = public_path('pengumuman/' . $pengumuman->foto);
    if ($pengumuman->foto && file_exists($path)) {
        unlink($path);
    }

    $lampiranPath = public_path('pengumuman/lampiran/' . $pengumuman->lampiran);
    if ($pengumuman->lampiran && file_exists($lampiranPath)) {
        unlink($lampiranPath);
    }

    $pengumuman->delete();

    return redirect()->route('admin.pengumuman.index')
        ->with('success', 'Pengumuman berhasil dihapus');
    }
}
