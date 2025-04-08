<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari tabel 'abouts'
        $about = About::first();

        // Tetap kirim view meskipun datanya null (ditangani di Blade)
        return view('about', compact('about'));
    }
}
