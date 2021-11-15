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
        'name' => 'Habib rifqi',
        'title' => 'Home'
    ]);
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [

        'title' => 'About'
    ]);
});



Route::get('/post', function () {
    $blog_poset = [
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
    return view('post', [

        'title' => 'Post',
        'postingan' => $blog_poset
    ]);
});

//halaman sigle post

Route::get('post/{slug}', function ($slug) {
    $blog_poset = [
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

    $new_post = [];

    foreach ($blog_poset as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('postingan', [
        'title' => 'postingan',
        'newpostingan' => $new_post
    ]);
});
