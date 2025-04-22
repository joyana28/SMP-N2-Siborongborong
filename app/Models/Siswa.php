<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'id_kelas';
    
    protected $fillable = [
        'id_admin',
        'nama_kelas',
        'jumlah_siswa',
        'jumlah_siswa_L',
        'jumlah_siswa_P',
        'tahun',
        'history',
        'wali_kelas_id',
    ];

    // Relationships
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function waliKelas()
    {
        return $this->belongsTo(Guru::class, 'wali_kelas_id');
    }
}