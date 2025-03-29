<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('news.index', [
            'title' => 'Berita - SMPN 2 Siborongborong',
            'news' => $news
        ]);
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('news.detail', [
            'title' => $newsItem->title,
            'news' => $newsItem
        ]);
    }
}