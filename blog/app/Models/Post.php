<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{

    public  $title;
    public  $date;
    public  $excerpt;
    public  $body;
    public $slug;

    /**
     * @param $title
     * @param $date
     * @param $excerpt
     * @param $body
     */
    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->slug = $slug;
    }


    public  static  function  all(){

        return cache()->rememberForever('posts.all',function (){

            return collect(File::files(resource_path("posts/")))
                ->map(function ($file){
                    return \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
                })
                -> map(function ($document){
                    return new Post(
                        $document->title,
                        $document->date,
                        $document->excerpt,
                        $document->body(),
                        $document->slug);
                })->sortByDesc('date');

        });





    }
    public  static function find ($slug){

        // of all the blog posts, find the one with a slug that matches the one that was requested
//            base_path();

        $posts = static::all();
            return ($posts->firstWhere('slug',$slug));

//            if (! file_exists($path=resource_path("posts/{$slug}.html"))){
//                throw  new ModelNotFoundException();
//            }
//            return cache()->remember("posts.{$slug}",now()->addMinutes(10),function () use($path){
//                return file_get_contents($path);
//            });


    }
}
