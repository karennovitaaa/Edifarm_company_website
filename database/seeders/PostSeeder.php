<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'image' => 'images\post\1684168080.jpg',
            'caption' => 'Caption for Post 1',
            'post_latitude' => '123.4567',
            'post_longitude' => '987.6543',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Post::create(
        [
            'image' => 'images\post\1684068538.jpg',
            'caption' => 'Caption for Post 2',
            'post_latitude' => '321.6547',
            'post_longitude' => '789.1234',
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Post::create([
            'image' => 'images\post\1683880861.jpg',
            'caption' => 'Caption for Post 3',
            'post_latitude' => '456.7891',
            'post_longitude' => '654.3219',
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Post::create([
            'image' => 'images\post\1683880861.jpg',
            'caption' => 'Caption for Post 3',
            'post_latitude' => '456.7891',
            'post_longitude' => '654.3219',
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
