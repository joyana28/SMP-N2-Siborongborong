<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'alumni';

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
        'tahun_lulus',
    ];
}