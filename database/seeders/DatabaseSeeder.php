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

        User::factory()->create([
            'name' => 'Ilham Ramadhan',
            'username'=>'Hamz',
            'email' => 'ilhamputra0601@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(5)->create();
        //
        Post::factory(100)->create();

        //
        Category::factory()->create([
            'name' => 'Programing',
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
