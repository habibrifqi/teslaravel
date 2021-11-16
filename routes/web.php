<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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



Route::get('/post', [PostController::class, 'index']);

//halaman sigle post

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => "Post by Category $category->name",
        'postingan' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('post', [
        'title' => "Post By author : $author->name",
        'postingan' => $author->posts->load('category', 'author')
    ]);
});
