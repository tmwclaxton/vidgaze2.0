<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{

        // \Illuminate\Support\Facades\DB::listen(function ($query) {
        //    // \Illuminate\Support\Facades\Log::info('foo');
        //     logger($query->sql, $query->bindings);
        // });
    public function index() {

        // return Post::latest()->filter(
        //     request(['search','category','author'])
        // )->paginate(10);

         return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search','category','author']))->simplePaginate(5)->withQueryString()
            // 'categories' => Category::all(),      ]);
         ]);

    }

    public function show(Post $post) {
        return view('post.show', [
            'post'=> $post
        ]);
    }



}
