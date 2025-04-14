<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $primaryKey = 'id_fasilitas';
    protected $fillable = [
        'id_admin',
        'nama',
        'deskripsi',
        'foto',
        'tahun',
        'kerusakan',
        'penambahan'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}