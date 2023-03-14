<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
    // dd(request('search'));
    $title = "";
    if(request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = ' in ' . $category->name;
    }

    if(request('author')) {
        $author = User::firstWhere('username' , request('author'));
        $title = 'by ' . $author->username;
    }

        return view('posts', [
            'title' => "All Posts " . $title,
            'active' => 'posts',
            // "posts" => Post::all(),
            "posts" => Post::latest()->filter(request(['search' , 'category' , 'author']))
            ->paginate(7)
            ->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view ('post', [
            'title' => 'Single Posts',
            'active'=> 'posts',
            'post' => $post,
        ]);
    }
}
