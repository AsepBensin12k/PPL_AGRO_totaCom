<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeranjangSeeder extends Seeder
{
    public function run()
    {
        DB::table('keranjang')->insert([
            [
                'id_akun' => 2,
                'id_produk' => 1,
                'jumlah_produk' => 1,
            ],
            [
                'id_akun' => 2,
                'id_produk' => 2,
                'jumlah_produk' => 3,
            ],
        ]);
    }
}
