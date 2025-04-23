<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil semua seeder dengan urutan yang benar
        $this->call([
            // 1. Seeder untuk role
            RolesSeeder::class,

            // 2. Seeder untuk akun
            AkunSeeder::class,

            // 3. Seeder untuk jenis
            JenisSeeder::class,

            // 4. Seeder untuk status
            StatusSeeder::class,

            // 5. Seeder untuk metode pembayaran
            MetodePembayaranSeeder::class,

            // 6. Seeder untuk produk
            ProdukSeeder::class,

            // 7. Seeder untuk keranjang
            KeranjangSeeder::class,

            // 8. Seeder untuk pesanan
            PesananSeeder::class,

            // 9. Seeder untuk detail pesanan
            DetailPesananSeeder::class,

            // 10. Seeder untuk riwayat transaksi
            RiwayatTransaksiSeeder::class,
        ]);
    }
}
