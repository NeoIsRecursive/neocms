<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SinglePostController extends Controller
{
    public function __invoke(Post $post, Request $request)
    {
        $body =  Str::markdown($post->body);

        return view('post.show')->with('post', [
            'body' => $body,
            'author' => $post->author()
        ]);
    }
}
