<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    
    protected $fillable = [
        'id_admin',
        'nama_kelas',
        'jumlah_siswa',
        'jumlah_siswa_l',
        'jumlah_siswa_p',
        'tahun',
        'history',
        'wali_kelas'
    ];
    
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}