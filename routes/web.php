<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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
    return view('add-post');
});
Route::get('/add-post',[postController::class,'addPost'])->name('post.add');
Route::post('/add-post',[postController::class,'savePost'])->name('save.post');
Route::get('/post-list',[postController::class,'postList'])->name('post.list');
Route::get('/edit-post/{id}',[postController::class,'editPost'])->name('post.edit');
Route::get('/delete-post/{id}',[postController::class,'deletePost'])->name('post.delete');
Route::post('/update-post',[postController::class,'updatePost'])->name('update.post');



