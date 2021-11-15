<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('post/{slug}', [PostController::class, 'show']);
