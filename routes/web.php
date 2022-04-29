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

    
     return view('posts', [
        'posts' => Post::all()
    ]);   

});//->whereAlphaNumeric('posts');


Route::get('posts/{post}', function (Post $post) {
 //   Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
         'post'=> $post
     ]);


});//->where('post','([A-Za-z0-9\-\_]+)');//regex





