<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Akun;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if (!Akun::where('username', 'admin')->exists()) {
            Akun::create([
                'username' => 'admin',
                'password' => Hash::make('adminpassword'),
                'nama' => 'Admin User',
                'email' => 'admin@example.com',
                'no_hp' => '081234567890',
                'id_role' => 1,
            ]);
        }

        // Menambahkan akun user jika belum ada
        if (!Akun::where('username', 'user')->exists()) {
            Akun::create([
                'username' => 'user',
                'password' => Hash::make('userpassword'),
                'nama' => 'User',
                'email' => 'user@example.com',
                'no_hp' => '081234567890',
                'id_role' => 2,
            ]);
        }
    }
}
