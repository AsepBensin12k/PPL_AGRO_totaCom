<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder untuk produk
        $this->call([
            ProdukSeeder::class, // panggil seeder yang kamu buat
        ]);

    }
}
