<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_prestasi';
    protected $fillable = ['id_admin', 'nama', 'tanggal', 'deskripsi'];

    // Define relationship
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}
