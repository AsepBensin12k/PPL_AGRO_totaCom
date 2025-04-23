<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $table = 'akuns';
    protected $primaryKey = 'id_akun';
    public $timestamps = true;

    protected $fillable = [
        'username', 'password', 'nama', 'email', 'no_hp', 'id_role',
    ];

    // Relasi dengan Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
