<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
    use HasFactory;
    
    protected $table = 'kepala_sekolah';
    protected $primaryKey = 'id_kepsek';
    
    protected $fillable = [
        'id_admin',
        'nama',
        'nip',
        'golongan',
        'periode',
        'foto'
    ];
    
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}