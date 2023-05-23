<?php

namespace Database\Seeders;
use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'plant_name' => 'Padi',
            'start' => '2023-01-01',
            'end' => '2023-01-15',
            'status' => 'selesai',
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Session::create([
            'plant_name' => 'Jagung',
            'start' => '2023-02-01',
            'end' => '2023-02-28',
            'status' => 'selesai',
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
