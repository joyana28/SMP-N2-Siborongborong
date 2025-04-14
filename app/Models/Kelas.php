<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['id_admin', 'nama_kelas', 'jumlah_siswa', 'jumlah_siswa_l', 'jumlah_siswa_p', 'wali_kelas_id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function waliKelas()
    {
        return $this->belongsTo(Guru::class, 'wali_kelas_id', 'id_guru');
    }
}