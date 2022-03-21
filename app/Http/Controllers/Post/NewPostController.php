<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewPostController extends Controller
{

    public function __invoke(Request $request)
    {
        $request['slug'] = str_replace([' ', '/'], '_', $request->slug);

        $request->validate([
            'slug' => ['required', 'unique:posts'],
            'body' => ['required']
        ]);


        $post = Post::create([
            'slug' => $request->slug,
            'body' => $request->body,
            'author_id' => Auth::id()
        ]);

        return redirect("/post/$post->slug");
    }
}
