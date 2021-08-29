<?php

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

Route::get('/', function () {
//    \Illuminate\Support\Facades\DB::listen(function ($query){
//        logger($query->sql,$query->bindings);
//    });

    //    $posts=[];

    //    $posts=array_map(function ($file){
//        $document=\Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
//        return new Post(
//            $document->title,
//            $document->date,
//            $document->excerpt,
//            $document->body(),
//            $document->slug);
//    },$files);

//    foreach ($files as $file){
//        $document=\Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
//        $posts[]=new Post(
//            $document->title,
//        $document->date,
//        $document->excerpt,
//        $document->body(),
//            $document->slug
//
//        );

//    }
        return view('posts',[
        'posts'=> Post::latest()->get(),
            'categories'=>\App\Models\Category::all()
    ]);



//    $posts=Post::all();
////    ddd($posts[0]->getContents());
//    return view('posts',[
//        'posts'=> $posts
//    ]);
//    return "hello World";
});

Route::get('posts/{post:slug}', function (Post $post){

//Find a post by its slug and pass it to a view called "post

    //    ddd($post);

    return view('post',[
        'post'=> $post
    ]);

/*    $path=__DIR__. "/../resources/posts/{$slug}.html";
//    ddd($path);
    if (! file_exists($path)){
        dd("file does not exits");
        ddd('File does not exists');
        abort(404);
        return  redirect('/');
    }

    $post= cache()->remember("posts.{$slug}",now()->addMinutes(10),function () use($path){
//        var_dump('file_get_contents');
        return file_get_contents($path);
    });
//   $post= file_get_contents($path);

   return view('post',[
       'post'=> $post
   ]);*/
});
Route::get('categories/{category:slug}',function (\App\Models\Category $category){


    return view('posts',[

        'posts'=> $category->posts

    ]);
});

Route::get('authors/{author:username}',function (\App\Models\User $author){

//    dd($author);
    return view('posts',[

        'posts'=> $author->posts

    ]);
});

