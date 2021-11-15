<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post_
{

    private static $blog_poset =
    [
        [
            'jdudul' => 'satu',
            'slug' => 'post-satu',
            'pembuat' => 'pembuat satu',
            'des' => 'loremsdfoljsdofijsdofijosdfjoisd'
        ],
        [
            'jdudul' => 'dua',
            'slug' => 'post-dua',
            'pembuat' => 'pembuat dua',
            'des' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem porro, aperiam et qui, repellat aliquam ea, voluptatum tempore nostrum saepe repudiandae? Voluptas, deleniti. Aut quo dolores, dignissimos corporis eligendi aspernatur. Voluptas alias et ratione ut molestiae sit a voluptatum accusantium!'
        ],
        [
            'jdudul' => 'tiga',
            'slug' => 'post-tiga',
            'pembuat' => 'pembuat tiga',
            'des' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem porro, aperiam et qui, repellat aliquam ea, voluptatum tempore nostrum saepe repudiandae? Voluptas, deleniti. Aut quo dolores, dignissimos corporis eligendi aspernatur. Voluptas alias et ratione ut molestiae sit a voluptatum accusantium!'
        ]
    ];

    // public static function all()
    // {
    //     //mengunakan self karena properti static,jika mengunakan properti biasa mengunakan this->
    //     return collect(self::$blog_poset);
    // }

    // public static function find($slug)
    // {
    //     $newpost = static::all();
    //     // $post = [];

    //     // foreach ($newpost as $p) {
    //     //     if ($p['slug'] === $slug) {
    //     //         $post = $p;
    //     //     }
    //     // }

    //     return $newpost->firstwhere('slug', $slug);
    // }
}
