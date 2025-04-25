<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkunSeeder extends Seeder
{
    public function run()
    {
        DB::table('akun')->insert([
            [
                'email' => 'admin@example.com',
                'id_role' => 1,
                'nama' => 'Admin User',
                'password' => bcrypt('admin01'),
                'username' => 'admin01',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Madura No. 1',
            ],
            [
                'email' => 'customer@example.com',
                'id_role' => 2,
                'nama' => 'Customer User',
                'password' => bcrypt('customer01'),
                'username' => 'customer01',
                'no_hp' => '082345678901',
                'alamat' => 'Jl. Batak No. 2',
            ],
            [
                'email' => 'staff@example.com',
                'id_role' => 2,
                'nama' => 'Staff User',
                'password' => bcrypt('staff01'),
                'username' => 'staff01',
                'no_hp' => '083456789012',
                'alamat' => 'Jl. Jawa No. 3',
            ],
        ]);
    }
}
