<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;


    protected $primaryKey = 'id_produk';
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'stok',
        'harga',
        'gambar',
        'id_jenis',
        'id_akun'
    ];

    public $timestamps = false;

}
