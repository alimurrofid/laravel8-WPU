<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $post = static::all();
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $post->firstWhere('slug', $slug);
    }
}
