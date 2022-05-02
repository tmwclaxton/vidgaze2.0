<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{


    public function index() {
        // \Illuminate\Support\Facades\DB::listen(function ($query) {
        //    // \Illuminate\Support\Facades\Log::info('foo');
        //     logger($query->sql, $query->bindings);
        // });
         return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search','category','author']))->get()
            // 'categories' => Category::all(),      ]);
         ]);

    }

    public function show(Post $post) {
        return view('post.show', [
            'post'=> $post
        ]);
    }



}
