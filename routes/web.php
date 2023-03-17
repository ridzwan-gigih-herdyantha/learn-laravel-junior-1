<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'title'=> 'Home',
        'active'=> 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title'=> 'About',
        'active'=> 'about',
        "name" => "Ridzwan Gigih Herdyantha",
        "email" => "Ridzwangigih3@gmail.com",
        "image" => "gambar.jpg"
    ]);
});

// Route::get('/contact', function () {
//     return view('contact', [
//         'title'=> 'About',
//         'active'=> 'categories',
//         "name" => "Ridzwan Gigih Herdyantha",
//         "email" => "Ridzwangigih3@gmail.com",
//         "image" => "gambar.jpg"
//     ]);
// });

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active'=> 'categories',
        'categories' => Category::all()
    ]);
});

// Sudah di tangai di query model #13 search & pagination 

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']); //Halaman Single Posts

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load(['category','author']),
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Posts by : $author->username",
//         'active'=> 'posts',
//         'posts' => $author->posts->load(['category','author']),
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [ DashboardPostController::class ,'checkSlug'])
->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');