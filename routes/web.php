<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view(
        'about',
        [
            'title' => 'About',
            'name' => 'Rofid',
            'email' => 'rofid@gmail.com',
            'image' => 'rofid.png'
        ]
    );
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Rofid',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quasi delectus ut. Obcaecati commodi eaque id amet laudantium iste vero, officiis corrupti neque repellat reprehenderit excepturi nam recusandae quia praesentium dolorum unde error aliquam impedit veniam aut! Repellat corporis totam alias tempora facere tenetur et eveniet, quisquam voluptas ea nihil adipisci sed odio atque consectetur sapiente? Deleniti ratione consequuntur, fuga, maxime voluptatum minima numquam vel repudiandae accusantium cumque ullam! Corporis optio architecto perspiciatis molestiae temporibus dolorem est recusandae nihil sunt?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Zidan',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quaerat molestias accusantium ipsum illo illum. Itaque ipsam qui sequi fuga, accusamus maxime vero? Doloremque ipsa asperiores perspiciatis dicta corrupti in, laudantium, amet dolorem cupiditate excepturi voluptates. Voluptatum exercitationem ducimus perspiciatis magnam autem necessitatibus omnis laboriosam dolores facere quam vitae pariatur, repellendus sint earum, error eaque quis cupiditate, ipsum velit aut beatae vel. Laborum, corporis quibusdam dignissimos alias ipsa exercitationem dicta quia vero molestias velit praesentium enim explicabo aspernatur illum pariatur harum. Velit eos odit, incidunt tempore quisquam voluptas, mollitia in nisi consectetur, obcaecati placeat veritatis. Iusto laboriosam quo expedita voluptate.'
        ]
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}',function($slug){
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Rofid',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quasi delectus ut. Obcaecati commodi eaque id amet laudantium iste vero, officiis corrupti neque repellat reprehenderit excepturi nam recusandae quia praesentium dolorum unde error aliquam impedit veniam aut! Repellat corporis totam alias tempora facere tenetur et eveniet, quisquam voluptas ea nihil adipisci sed odio atque consectetur sapiente? Deleniti ratione consequuntur, fuga, maxime voluptatum minima numquam vel repudiandae accusantium cumque ullam! Corporis optio architecto perspiciatis molestiae temporibus dolorem est recusandae nihil sunt?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Zidan',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quaerat molestias accusantium ipsum illo illum. Itaque ipsam qui sequi fuga, accusamus maxime vero? Doloremque ipsa asperiores perspiciatis dicta corrupti in, laudantium, amet dolorem cupiditate excepturi voluptates. Voluptatum exercitationem ducimus perspiciatis magnam autem necessitatibus omnis laboriosam dolores facere quam vitae pariatur, repellendus sint earum, error eaque quis cupiditate, ipsum velit aut beatae vel. Laborum, corporis quibusdam dignissimos alias ipsa exercitationem dicta quia vero molestias velit praesentium enim explicabo aspernatur illum pariatur harum. Velit eos odit, incidunt tempore quisquam voluptas, mollitia in nisi consectetur, obcaecati placeat veritatis. Iusto laboriosam quo expedita voluptate.'
        ]
    ];
    $new_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});