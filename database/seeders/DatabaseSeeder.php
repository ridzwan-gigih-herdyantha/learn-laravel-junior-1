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
        

        // User::create([
        //     'name' => 'Ridzwan Gigih',
        //     'email' => 'Ridzwan@gmail',
        //     'password' => bcrypt('password')
        // ]);

        // User::create([
        //     'name' => 'Alan Ari',
        //     'email' => 'Alan@gmail',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug'  => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur. tempore autem labore officiis maxime fuga culpa quidem eaque soluta praesentium odio porro nihil facilis rerum accusamus quasi obcaecati. Corporis rerum accusamus facilis quam alias cum, expedita sunt quis voluptate aut debitis nisi vero a, nostrum ad eaque iusto, laboriosam accusantium illum reiciendis nemo dolor. Maiores, ipsum tempore mollitia asperiores impedit nihil vero cumque dolores architecto sapiente quod nisi recusandae! Provident vel dolorem cupiditate id non minus assumenda, quaerat sit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug'  => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur. tempore autem labore officiis maxime fuga culpa quidem eaque soluta praesentium odio porro nihil facilis rerum accusamus quasi obcaecati. Corporis rerum accusamus facilis quam alias cum, expedita sunt quis voluptate aut debitis nisi vero a, nostrum ad eaque iusto, laboriosam accusantium illum reiciendis nemo dolor. Maiores, ipsum tempore mollitia asperiores impedit nihil vero cumque dolores architecto sapiente quod nisi recusandae! Provident vel dolorem cupiditate id non minus assumenda, quaerat sit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug'  => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur. tempore autem labore officiis maxime fuga culpa quidem eaque soluta praesentium odio porro nihil facilis rerum accusamus quasi obcaecati. Corporis rerum accusamus facilis quam alias cum, expedita sunt quis voluptate aut debitis nisi vero a, nostrum ad eaque iusto, laboriosam accusantium illum reiciendis nemo dolor. Maiores, ipsum tempore mollitia asperiores impedit nihil vero cumque dolores architecto sapiente quod nisi recusandae! Provident vel dolorem cupiditate id non minus assumenda, quaerat sit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug'  => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod libero facilis, eum velit incidunt ad sapiente reiciendis possimus totam necessitatibus? Magni error aut adipisci, rem est, aspernatur voluptatibus consequuntur. tempore autem labore officiis maxime fuga culpa quidem eaque soluta praesentium odio porro nihil facilis rerum accusamus quasi obcaecati. Corporis rerum accusamus facilis quam alias cum, expedita sunt quis voluptate aut debitis nisi vero a, nostrum ad eaque iusto, laboriosam accusantium illum reiciendis nemo dolor. Maiores, ipsum tempore mollitia asperiores impedit nihil vero cumque dolores architecto sapiente quod nisi recusandae! Provident vel dolorem cupiditate id non minus assumenda, quaerat sit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug'      => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();
        

    }
}
