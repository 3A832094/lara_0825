<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    return view('welcome');
});
Route::get('posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('post', [\App\Http\Controllers\PostsController::class, 'post'])->name('posts.show');
Route::get('about', [\App\Http\Controllers\PostsController::class, 'about'])->name('posts.about');
Route::get('contact', [\App\Http\Controllers\PostsController::class, 'contact'])->name('posts.contact');

//$post = new Post();
//$post->title = 'test title1';
//$post->content = 'test content1';
//$post->save();
//---------------------------------------
Post::create([
    'title' => 'test title2',
    'content' => 'test content',
]);
