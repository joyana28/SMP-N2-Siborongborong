<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model
     *
     * @var string
     */
    protected $table = 'fasilitas';

    /**
     * Primary key tabel
     *
     * @var string
     */
    protected $primaryKey = 'id_fasilitas';

    /**
     * Atribut yang dapat diisi (mass assignable)
     *
     * @var array
     */
    protected $fillable = [
        'id_admin',
        'nama',
        'deskripsi',
        'foto',
        'tahun',
        'kerusakan',
        'penambahan',
    ];

    /**
     * Relasi dengan model Admin
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}