<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_admin';
    protected $fillable = ['username', 'email', 'password'];

    // Define relationships
    public function alumnis()
    {
        return $this->hasMany(Alumni::class, 'id_admin', 'id_admin');
    }

    public function prestasis()
    {
        return $this->hasMany(Prestasi::class, 'id_admin', 'id_admin');
    }
    
    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'id_admin', 'id_admin');
    }

    public function pengumumans()
    {
        return $this->hasMany(Pengumuman::class, 'id_admin', 'id_admin');
    }

    public function ekstrakurikulers()
    {
        return $this->hasMany(Ekstrakurikuler::class, 'id_admin', 'id_admin');
    }

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'id_admin', 'id_admin');
    }

    public function tenagaPengajars()
    {
        return $this->hasMany(TenagaPengajar::class, 'id_admin', 'id_admin');
    }
}
