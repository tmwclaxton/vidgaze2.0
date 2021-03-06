<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CommentController;
// use App\Models\Category;
// use App\Models\Post;
// use App\Models\User;
use Illuminate\Support\Facades\Route;
// use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
// use Spatie\YamlFrontMatter\YamlFrontMatter;
//use vendor\mailchimp\marketing\Api\ApiClient;
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
Route::get('ping', function () {

    $mailchimp = new MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us9'
    ]);

   // $response = $mailchimp->ping->get();
    //$response = $mailchimp->lists->getAllLists();
  //  $response = $mailchimp->lists->getList('df13a287c4');
  //  $response = $mailchimp->lists->getListMembersInfo('df13a287c4');
    $response = $mailchimp->lists->addListMember('df13a287c4', [
        'email_address' => 'tmwaasdfsdfclaxton@gmail.com',
        'status' => 'subscribed'
    ]);
    //print_r($response);
    // dd($response);
    print("<pre>".print_r($response,true)."</pre>");
});

Route::get('about', function ()
{
        return view('information.about');
})->name("about");


Route::get('/', [PostController::class,'index'])->name("home");//->whereAlphaNumeric('posts');
Route::get('posts/{post:slug}', [PostController::class,'show'])->name("post");

Route::post('posts/{post:slug}/comments', [CommentController::class,'store'])->middleware("auth");

Route::get('register', [RegisterController::class,'create'])->middleware("guest");
Route::post('register', [RegisterController::class,'store'])->middleware("guest");

Route::get('login', [SessionsController::class,'create'])->middleware("guest");
Route::post('login', [SessionsController::class,'store'])->middleware("guest");
Route::post('logout', [SessionsController::class,'destroy'])->middleware("auth");

//->where('post','([A-Za-z0-9\-\_]+)');//regex



// Route::get('categories/{category:slug}', function (Category $category)
// {
        // \Illuminate\Support\Facades\DB::listen(function ($query) {
        //    // \Illuminate\Support\Facades\Log::info('foo');
        //     logger($query->sql, $query->bindings);
        // });
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
