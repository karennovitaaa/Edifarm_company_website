<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //User::factory(4)->create();
        User::create([
            'username' => 'admin',
                'name' => 'Admin',
                'gender' => 'Laki-laki',
                'photo' => 'admin.jpg',
                'address' => 'Jalan Admin',
                'phone' => '1234567890',
                'born_date' => '1990-01-01',
                'bio' => 'Bio Admin',
                'latitude' => null,
                'longitude' => null,
                'email' => 'admin@example.com',
                'password' => bcrypt('123'),
                'level' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        User::create([
            'username' => 'wishal123',
                'name' => 'wishal',
                'gender' => 'Laki-laki',
                'photo' => 'wishal.jpg',
                'address' => 'Jember',
                'phone' => '1234567890',
                'born_date' => '1990-01-01',
                'bio' => 'halo dek',
                'latitude' => null,
                'longitude' => null,
                'email' => 'wishal123@gmail.com',
                'password' => bcrypt('123'),
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
        ]);

    }
}
