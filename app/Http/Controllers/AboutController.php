<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('about', compact('about'));
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::all();

        if ($fasilitas->isEmpty()) {
            return redirect()->route('home')->with('error', 'Fasilitas tidak ditemukan');
        }

        return view('about.fasilitas', compact('fasilitas'));
    }

    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();

        if ($ekstrakurikuler->isEmpty()) {
            return redirect()->route('home')->with('error', 'Ekstrakurikuler tidak ditemukan');
        }

        return view('about.ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function visimisi()
    {
        return view('about.visimisi');
    }
}
