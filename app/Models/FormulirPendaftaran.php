<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirPendaftaran extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'formulir_pendaftaran';

    /**
     * Primary key untuk tabel.
     *
     * @var string
     */
    protected $primaryKey = 'id_pendaftaran';

    /**
     * Atribut yang dapat diisi.
     *
     * @var array
     */
    protected $fillable = [
        'id_admin',
        'deskripsi',
        'formulir_pendaftaran',
        'tanggal_terbit',
        'tanggal_berakhir',
    ];

    /**
     * Atribut yang harus dikonversi.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_terbit' => 'date',
        'tanggal_berakhir' => 'date',
    ];

    /**
     * Mendapatkan admin yang terkait dengan formulir pendaftaran ini.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}