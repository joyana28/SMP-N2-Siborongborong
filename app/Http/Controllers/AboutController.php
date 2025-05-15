<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fasilitas;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

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

        return view('about.fasilitas', compact('fasilitas'));
    }

    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();

        return view('about.ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function visimisi()
    {
        return view('about.visimisi');
    }
}
