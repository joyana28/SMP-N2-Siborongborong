<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        return VisiMisi::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        return VisiMisi::create($request->all());
    }

    public function show($id)
    {
        return VisiMisi::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->update($request->all());

        return $visiMisi;
    }

    public function destroy($id)
    {
        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->delete();

        return response()->json(['message' => 'Deleted']);
    }
}

