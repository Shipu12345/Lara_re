<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Post;
use Illuminate\Support\Facades\File;
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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::post('sessions',[SessionsController::class,'store'])->middleware('guest');
Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');


//Route::get('categories/{category:slug}',function (\App\Models\Category $category){
//
//
//    return view('posts',[
//
//        'posts'=> $category->posts,
//        'currentCategory'=>$category,
//        'categories'=>\App\Models\Category::all()
//
//    ]);
//})->name('category');

//Route::get('authors/{author:username}',function (\App\Models\User $author){
//
////    dd($author);
//    return view('posts.index',[
//
//        'posts'=> $author->posts
////,'categories'=>\App\Models\Category::all()
//
//    ]);
//});

