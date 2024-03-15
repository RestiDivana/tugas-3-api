<?php

use Illuminate\Database\Seeder;
use App\Address;
use App\User;

class AddressesTableSeeder extends Seeder
{
    public function run()
    {
        // Ambil contoh pengguna
        $user = User::first();

        // Buat contoh alamat untuk pengguna
        $user->addresses()->create([
            'address_line_1' => '123 Main St',
            'city' => 'New York',
            'state' => 'NY',
            'country' => 'USA',
            'postal_code' => '10001',
        ]);

        // Tambahkan lebih banyak alamat jika diperlukan
    }
}