<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $announcements = [
            [
                "title" => "Kelulusan Siswa",
                "date" => "20 Juni 2023",
                "image" => "announcement1.jpg",
                "desc" => "Pengumuman kelulusan siswa tahun ajaran 2022/2023"
            ],
            [
                "title" => "Pengumuman peserta didik baru",
                "date" => "15 Juni 2023",
                "image" => "announcement2.jpg",
                "desc" => "Pendaftaran peserta didik baru tahun ajaran 2023/2024"
            ],
            [
                "title" => "Perubahan jadwal pembelajaran",
                "date" => "10 Juni 2023",
                "image" => "announcement3.jpg",
                "desc" => "Perubahan jadwal pembelajaran untuk semester ganjil"
            ],
            [
                "title" => "Kegiatan Maulid Nabi di sekolah",
                "date" => "5 Juni 2023",
                "image" => "announcement4.jpg",
                "desc" => "Kegiatan Maulid Nabi Muhammad SAW di sekolah"
            ],
            [
                "title" => "Kegiatan Perpisahan Guru",
                "date" => "1 Juni 2023",
                "image" => "announcement5.jpg",
                "desc" => "Kegiatan perpisahan guru yang akan pensiun"
            ]
        ];
        
        return view('home', compact('announcements'));
    }
}