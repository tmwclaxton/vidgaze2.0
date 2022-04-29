<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;
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


    // foreach ($files as $file) {
        // $document = YamlFrontMatter::parseFile($file);
    //     $posts[] = new Post(
    //         $document->matter('title'),
    //         $document->matter('excerpt'),
    //         $document->matter('date'),
    //         $document->body(),
    //         $document->matter('slug')
    //     );

    // }
    
    //ddd($posts);
    
     return view('posts', [
        'posts' => Post::all()
    ]);   
    // $document = YamlFrontMatter::parseFile(
    //     resource_path('posts/my-third-post.html')
    // );

    // ddd($document->matter('excerpt'));


    // return view('posts', [
    //     'posts' => Post::all()
    // ]);

  //  $posts = Post::all();
  //  ddd($posts[0]->getContents());
    //return ['foo' => 'bar'];
    //return view('welcome');
    //return Post::find('my-first-post');
});//->whereAlphaNumeric('posts');


Route::get('posts/{post}', function ($slug) {
    $post = Post::find($slug); 
    // ddd($post);
    return view('post', [
         'post'=>  $post
     ]);

    // $path = (__DIR__ . "/../resources/posts/{$slug}.html");
        
    // if ( file_exists($path)) {
    //     $post = cache()->remember("posts.{$slug}", 5, function() use ($path) {
    //         var_dump('file get contents');
    //         return file_get_contents($path);
    //     });
        
    //     return view('post', ['post'=> $post]);


    //     } else {
    //         return redirect('');
    //         //abort(404);
    //         //dd();ddd();
    //     }
})->where('post','([A-Za-z0-9\-\_]+)');//regex





