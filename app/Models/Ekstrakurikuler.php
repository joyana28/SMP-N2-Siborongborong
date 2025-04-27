<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model
     *
     * @var string
     */
    protected $table = 'ekstrakurikuler';

    /**
     * Primary key tabel
     *
     * @var string
     */
    protected $primaryKey = 'id_ekstrakurikuler';

    /**
     * Atribut yang dapat diisi (mass assignable)
     *
     * @var array
     */
    protected $fillable = [
        'id_admin',
        'nama',
        'deskripsi',
        'pembina',
        'jadwal',
        'foto',
    ];

    /**
     * Relasi dengan model Admin
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}