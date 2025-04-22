<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    protected $table = 'visi_misi'; // Nama tabel di database

    protected $fillable = ['visi', 'misi']; // Kolom yang bisa diisi massal

    public $timestamps = true; // Jika kamu ingin timestamps digunakan (created_at, updated_at)
}