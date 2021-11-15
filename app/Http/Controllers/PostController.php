<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [

            'title' => 'Post',
            'postingan' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('postingan', [
            'title' => 'postingan',
            'newpostingan' => $post
        ]);
    }
}
