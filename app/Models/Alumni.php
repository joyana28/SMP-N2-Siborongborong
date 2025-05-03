<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';
    protected $primaryKey = 'id_alumni';

    protected $fillable = [
        'id_admin',
        'nama',
        'deskripsi',
        'tahun_lulus',
        'foto'
    ];

    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}
