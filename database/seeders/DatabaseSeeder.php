<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'username' => 'test',
            'nomor_hp' => '081234567890',
            'tanggal_lahir' => '1999-01-01',
            'role' => 'umum',
            'alamat' => 'Jl. Test',
            'image' => 'https://via.placeholder.com/150',
            'rekening' => '1234567890',
            'password' => bcrypt('password'),
        ]);
    }
}
