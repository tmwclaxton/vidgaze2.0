<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post, Request $request) {
        //validation
        request()->validate([
            'body' => 'required'
        ]);
        //add comment
        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->input('body')
            // 'user_id' => request->user()->id,
            // 'body' => request('body')
        ]);
        return back();
    }
}
