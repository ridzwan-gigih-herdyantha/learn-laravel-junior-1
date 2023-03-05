<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ridzwan Gigih",
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, sit at ea nemo incidunt obcaecati magni eos, quaerat odit impedit consequuntur? Quisquam aperiam harum tenetur esse quaerat minus cum similique. Nihil facere temporibus ad aliquid aperiam vitae optio, ex voluptate deleniti dolores repudiandae maiores quas, esse nemo sint nulla accusantium amet nesciunt sapiente similique officiis dolor blanditiis. Accusamus vel numquam consectetur velit, molestiae beatae est magni at dolore aspernatur debitis architecto illo placeat consequuntur dolorum ullam perferendis quam qui repellat.'
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alan",
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam inventore impedit quam dolores repellat animi sapiente itaque sequi aliquid, dolore deleniti distinctio saepe consectetur. Atque officia necessitatibus, at eligendi temporibus quae tempora sapiente eos libero, quo voluptatibus voluptas quasi eius quam ducimus possimus deserunt provident iure nemo veritatis. Odit nemo ducimus vel iste animi? Quis modi earum iure, consectetur fuga et nemo ducimus minus necessitatibus. Voluptatem deleniti enim asperiores vitae odit, aspernatur eveniet debitis velit hic sequi nisi! Sit accusantium aspernatur, consequuntur recusandae quam dolorum nobis quae maxime consectetur dolore obcaecati! Molestias dolorem nulla earum provident delectus id nemo quisquam.'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        // dd($posts->firstWhere('slug', $slug));

        // $post = [] ;
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);

    }        
}   

