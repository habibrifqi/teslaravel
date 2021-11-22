<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // $postingan = Post::latest();
        // dd(request('postingan'));
        // echo '<pre>';
        // print_r($postingan);
        // die;

        // dd(request('search'));
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('post', [

            'title' => 'All Post' . $title,
            'active' => 'active',
            // 'postingan' => Post::all()
            'postingan' =>  Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('postingan', [
            'title' => 'postingan',
            'active' => 'active',
            'newpostingan' => $post
        ]);
    }
}
