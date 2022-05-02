<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PostController::class,'index'])->name("home");//->whereAlphaNumeric('posts');


Route::get('posts/{post}', [PostController::class,'show'])->name("post");
Route::get('register', [RegisterController::class,'create'])->name("register");
Route::post('register', [RegisterController::class,'store']);

//->where('post','([A-Za-z0-9\-\_]+)');//regex



// Route::get('categories/{category:slug}', function (Category $category)
// {
//     return view('posts', [
//         'posts' => $category->posts, //->load(['category','author']),
//         'categories' => Category::all(),
//         'currentCategory' => $category
//     ]);
// })->name("category");

// Route::get('authors/{author:username}', function (User $author)
// {
//     return view('posts.index', [
//         'posts' => $author->posts //->load(['category','author']),
//         // 'categories' => Category::all()

//     ]);
// });
