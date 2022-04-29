<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post 
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;
    public function __construct($title,$excerpt,$date,$body,$slug)
    {
        $this->title = $title; 
        $this->excerpt = $excerpt; 
        $this->date = $date; 
        $this->body = $body; 
        $this->slug = $slug; 
    }

    public static function all() {
        //use maps when your looping an array and creating a new array
        return cache()->rememberForever('posts.all',function () {
            return collect( File::files(resource_path("posts"))) //put an array in a collectio object
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->matter('title'),
                    $document->matter('excerpt'),
                    $document->matter('date'),
                    $document->body(),
                    $document->matter('slug')                 
                ))
                ->sortByDesc('date');
        });
    }  


    // public static function all() {
    //     $files = File::files(resource_path("posts"));

    //     return $posts = array_map(function ($file) {
    //         $document = YamlFrontMatter::parseFile($file);
    //         return new Post(
    //             $document->matter('title'),
    //             $document->matter('excerpt'),
    //             $document->matter('date'),
    //             $document->body(),
    //             $document->matter('slug')
    //         );
    //     }, $files);
    // }



    
    public static function find($slug) 
    {

        return static::all()->firstWhere('slug',$slug);

        
        
       // base_path();
        // if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
        //     throw new ModelNotFoundException();
        
        // }      
        // return cache()->remember("posts.{$slug}",5, fn() => file_get_contents($path));

       // return $post;
    }
}
