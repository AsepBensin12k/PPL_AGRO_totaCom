<?php

namespace App\Models; // Deklarasi namespace harus di baris pertama

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;



    protected $fillable = ['nama_produk', 'harga', 'stok', 'gambar'];


    public $timestamps = false;
}
