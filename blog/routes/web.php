<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use App\Services\MailchimpNewsletter;

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


Route::post('newsletter', NewsletterController::class);

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::middleware('can:admin')->group(function (){
    Route::resource('admin/posts',AdminPostController::class)->except('show');
//    Route::get('admin/posts/{post}/edit',[AdminPostController::class,'edit']);
//    Route::get('admin/posts',[AdminPostController::class,'index']);
//    Route::get('admin/posts/create',[AdminPostController::class,'create']);
//    Route::post('admin/posts',[AdminPostController::class,'store']);
//    Route::patch('admin/posts/{post}',[AdminPostController::class,'update']);
//    Route::delete('admin/posts/{post}',[AdminPostController::class,'destroy']);
});




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

