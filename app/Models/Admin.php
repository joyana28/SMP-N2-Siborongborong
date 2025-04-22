<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    
    protected $fillable = [
        'username',
        'email',
        'password',
        'nama_lengkap',
    ];

    // Relationships
    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'id_admin');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'id_admin');
    }

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'id_admin');
    }

    public function formulirPendaftaran()
    {
        return $this->hasMany(FormulirPendaftaran::class, 'id_admin');
    }

    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'id_admin');
    }

    public function ekstrakurikuler()
    {
        return $this->hasMany(Ekstrakurikuler::class, 'id_admin');
    }

    public function kepalaSekolah()
    {
        return $this->hasMany(KepalaSekolah::class, 'id_admin');
    }

    public function guru()
    {
        return $this->hasMany(Guru::class, 'id_admin');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_admin');
    }
}