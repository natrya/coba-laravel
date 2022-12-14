<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;

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
    return view('home', ["title" => "Home"]);
});
Route::get('/about', function () {
    return view('about', ["title" => "About", "name" => "Ryan fabella", "email" => "ryanthe@gmail.com", "image" => "profil.jpg"]);
});
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function()
{
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category','user'),
    ]);
});
Route::get('/users/{user:username}', function(User $user)
{
    return view('posts', [
        'title' => "Posts By user : $user->name",
        'posts' => $user->post->load('category','user')
    ]);
});
Route::resource('roles', RoleController::class);
