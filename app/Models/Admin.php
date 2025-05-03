<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $incrementing = true;
    
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // Relationships

    // Admin punya banyak Alumni
    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'id_admin');
    }

    // Admin punya banyak Ekstrakurikuler
    public function ekstrakurikuler()
    {
        return $this->hasMany(Ekstrakurikuler::class, 'id_admin');
    }

    // Admin punya banyak Kepala Sekolah
    public function kepalaSekolah()
    {
        return $this->hasMany(KepalaSekolah::class, 'id_admin');
    }
    public function guru()
    {
        return $this->hasOne(Guru::class, 'id_admin', );
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_admin', 'id_admin');
    }

    public function formulirPendaftaran()
{
    return $this->hasMany(FormulirPendaftaran::class, 'id_admin', 'id_admin');
}
}
