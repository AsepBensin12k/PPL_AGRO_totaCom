<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        DB::table('produk')->insert([
            [
                'nama_produk' => 'Pupuk Sapi',
                'gambar' => 'laptop_hp.jpg',
                'harga' => 7000000,
                'stok' => 10,
                'id_jenis' => 1,
            ],
            [
                'nama_produk' => 'Bibit jagung',
                'gambar' => 'tshirt.jpg',
                'harga' => 150000,
                'stok' => 20,
                'id_jenis' => 3,
            ],
            [
                'nama_produk' => 'Pestisida',
                'gambar' => '',
                'harga' => 50000,
                'stok' => 50,
                'id_jenis' => 2,
            ],
            [
                'nama_produk' => 'Pupuk kompos',
                'gambar' => '',
                'harga' => 900000,
                'stok' => 5,
                'id_jenis' => 1,
            ],
        ]);
    }
}
