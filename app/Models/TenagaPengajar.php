<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaPengajar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tenagapengajar';
    protected $fillable = ['id_admin', 'nama_kepalasekolah', 'deskripsi', 'golongan', 'nama_guru', 'bidang'];

    // Define relationship
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}