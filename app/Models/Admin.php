<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // Relationships
    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'id_admin');
    }

    public function ekstrakurikuler()
    {
        return $this->hasMany(Ekstrakurikuler::class, 'id_admin');
    }
}
    
    