<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirPendaftaran extends Model
{
    use HasFactory;

    protected $table = 'formulir_pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    
    protected $fillable = [
        'deskripsi',
        'formulir_pendaftaran',
        'tanggal_terbit',
        'tanggal_berakhir',
        'id_admin'
    ];

    protected $casts = [
        'tanggal_terbit' => 'date',
        'tanggal_berakhir' => 'date',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}