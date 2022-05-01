<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    \Illuminate\Support\Facades\DB::listen(function ($query) {
       // \Illuminate\Support\Facades\Log::info('foo');
        logger($query->sql, $query->bindings);
    });
    
     return view('posts', [
        'posts' => Post::latest()->with('category','author')->get()
    ]);   

});//->whereAlphaNumeric('posts');


Route::get('posts/{post}', function (Post $post) {
 //   Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
         'post'=> $post
     ]);


});//->where('post','([A-Za-z0-9\-\_]+)');//regex


Route::get('categories/{category:slug}', function (Category $category) 
{
    return view('posts', [
        'posts' => $category->posts->load(['category','author'])
    ]);   
});

Route::get('authors/{author:username}', function (User $author) 
{
    return view('posts', [
        'posts' => $author->posts->load(['category','author'])
        
    ]);   
});