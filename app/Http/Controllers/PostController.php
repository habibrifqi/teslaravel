<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [

            'title' => 'All Post',
            'active' => 'active',
            // 'postingan' => Post::all()
            'postingan' => Post::with(['author', 'category'])->latest()->get()
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
