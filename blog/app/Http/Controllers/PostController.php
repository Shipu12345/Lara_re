<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Post;
use  App\Models;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    //
    public function index()
    {
//        $this->authorize('admin');



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
        return view('posts.index',[
            'posts'=> Post::latest()->filter(
                request(['search','category','author'])
            )->Paginate(6)->withQueryString()
//            'categories'=>Category::all(),


        ]);

    }

    public  function  show(Post $post){
        //Find a post by its slug and pass it to a view called "post

        return view('posts.show',[
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
    }


//    protected  function getPosts(){
////        $posts=Post::latest();
////
////        if((request('search'))){
////            $posts->where('title','like','%'.request('search').'%')
////                ->orWhere('body','like',"%".request('search')."%");
////        }
////        return $posts->get();
//
////        return Post::latest()->filter()->get();
//    }
}
