<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DetailPesananSeeder extends Seeder
{
    public function run()
    {
        DB::table('detail_pesanan')->insert([
            [
                'id_pesanan' => 1,
            ],
        ]);
    }
}
