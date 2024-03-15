<?php

use Illuminate\Database\Seeder;
use App\Contact;
use App\User;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        // Ambil contoh pengguna
        $user = User::first();

        // Buat contoh kontak untuk pengguna
        $user->contacts()->createMany([
            ['type' => 'phone', 'value' => '123-456-7890'],
            ['type' => 'email', 'value' => 'john@example.com'],
        ]);

        // Tambahkan lebih banyak kontak jika diperlukan
    }
}