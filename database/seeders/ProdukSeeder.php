<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;


class ProdukSeeder extends Seeder
{

    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'apel',
            'harga' => 10000,
            'stok' => 50,
            'gambar' => null
        ]);

        Produk::create([
            'nama_produk' => 'Markisa',
            'harga' => 20000,
            'stok' => 30,
            'gambar' => null
        ]);
    }
}
