<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = ['id_admin', 'nama', 'nip', 'golongan', 'bidang', 'no_telp', 'foto'];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function kelasWali()
    {
        return $this->hasOne(Kelas::class, 'wali_kelas_id');
    }
}