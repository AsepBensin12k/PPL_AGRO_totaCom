<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak menggunakan nama tabel default (akun)
    protected $table = 'akun';

    // Tentukan kolom-kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'username', 'password', 'nama', 'email', 'no_hp', 'id_role',
    ];

    public $timestamps = false;
}
