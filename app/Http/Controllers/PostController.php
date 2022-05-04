<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //the 7 restful routes
    // index - show all
    // show - show one
    // create - show a page to create one of those item
    // store - when form submited persist the item
    // edit - show page to edit the item
    // update - when form submitted save the edits
    // destroy - delete one item

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
        return view('posts.show', [
            'post'=> $post
        ]);
    }



}
