<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'guru';

    /**
     * Primary key untuk tabel.
     *
     * @var string
     */
    protected $primaryKey = 'id_guru';

    /**
     * Atribut yang dapat diisi.
     *
     * @var array
     */
    protected $fillable = [
        'id_admin',
        'nama',
        'nip',
        'golongan',
        'bidang',
        'no_telp',
        'foto',
    ];

    /**
     * Mendapatkan admin yang terkait dengan guru ini.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}