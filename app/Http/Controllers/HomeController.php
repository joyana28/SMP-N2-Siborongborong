<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Assuming you have a News model

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest news
        $latestNews = News::latest()->take(3)->get();

        return view('welcome', [
            'title' => 'Beranda - SMPN 2 Siborongborong',
            'latestNews' => $latestNews
        ]);
    }
}