<?php

namespace Database\Seeders;
use App\Models\User;
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

        User::factory()->create([
            'username' => 'andru',
            'name' => 'Andru Widiyanto',
            'gender' => 'Laki-laki',
            'email' => 'andru@gmail.com',
            'password' => bcrypt('123'),
            'phone' => '085232398005',
            'address' => 'Lumajang',
            'born_date' => '2002-08-27',
            'photo' => 'photo.jpg',
            'level' => 'user',
        ]);
    }
}
