<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    public function run()
    {
        DB::table('pesanan')->insert([
            [
                'id_akun' => 2,
                'id_metode' => 1,
                'id_keranjang' => 1,
                'id_status' => 1,
                'tanggal' => now(),
            ],

        ]);

    }
}
