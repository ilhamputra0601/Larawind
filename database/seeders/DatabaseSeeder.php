<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::factory(3)->create();

        User::factory()->create([
            'name' => 'Ilham Ramadhan',
            'username'=>'ilham-ramadhan',
            'email' => 'ilhamputra0601@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Fatma Ramadhan',
            'username'=>'fatma-ramadhan',
            'email' => 'siti.fatimathus@gmail.com',
        ]);

        //
        Post::factory(10)->create();

        //
        Category::factory()->create([
            'name' => 'programing',
            'slug' => 'programing',
        ]);
        Category::factory()->create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::factory()->create([
            'name' => '3D Design',
            'slug' => '3D-design',
        ]);
    }
}