<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\TestingQuery;
use App\Models\User;
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
        User::create([
            'name' => 'Ferdian Firmansyah',
            'username' => 'ferdianfirmansyah',
            'email' => 'ferdianfy13@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        User::factory(4)->create();
        // TestingQuery::factory(5)->create();

        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
    }
}
