<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
            'name' => 'Ridzwan Gigih',
            'username' => 'Raizher',
            'email' => 'ridzwangigih3@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug'      => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Post::factory(20)->create();
        

    }
}
