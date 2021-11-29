<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        'active' => 'active',
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
        'active' => 'categories',
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('post', [
//         'active' => 'active',
//         'title' => "Post Category : $category->name",
//         'postingan' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('post', [
//         'active' => 'active',
//         'title' => "Post By author : $author->name",
//         'postingan' => $author->posts->load('category', 'author')
//     ]);
// });

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
