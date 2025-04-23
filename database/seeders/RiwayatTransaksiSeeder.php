<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatTransaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('riwayat_transaksi')->insert([
            [
                'id_detail' => 1,
            ],
        ]);
    }
}
