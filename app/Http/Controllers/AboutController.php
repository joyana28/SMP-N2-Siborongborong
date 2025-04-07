<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first(); // Ambil satu data saja
        return view('about.index', compact('about'));
    }

    public function show($section)
    {
        $about = About::first();

        switch ($section) {
            case 'visi-misi':
                return view('about.visi_misi', compact('about'));
            case 'fasilitas':
                return view('about.fasilitas', compact('about'));
            case 'ekstrakurikuler':
                return view('about.ekstrakurikuler', compact('about'));
            default:
                abort(404);
        }
    }
}
