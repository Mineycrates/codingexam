<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('welcome', [
        'posts' => Post::all()
    ]);
});
Route::get('/create-post', [PostController::class, 'index']);
Route::get('/delete', [PostController::class, 'delete']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/create-post', [PostController::class, 'create']);
Route::post('/edit-post', [PostController::class, 'update']);
Route::get('/upvote', [PostController::class, 'upvote']);
Route::get('/downvote', [PostController::class, 'downvote']);