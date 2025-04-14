<?php

// Admin Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_admin';
    protected $fillable = ['username', 'email', 'password', 'nama_lengkap'];
    protected $hidden = ['password'];

    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'id_admin');
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

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'id_admin');
    }

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'id_admin');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_admin');
    }

    public function guru()
    {
        return $this->hasMany(Guru::class, 'id_admin');
    }
}
