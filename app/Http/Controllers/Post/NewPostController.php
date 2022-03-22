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
        $titleExists = preg_match('/(# )(.*)/', $request->body, $m);
        if (!$titleExists) {
            return back()->withErrors('you must have a title');
        }
        $m[0] = str_replace(['# ', "\r"], '', $m[0]);
        $request['title'] = str_replace([' ', '/'], '_', $m[0]);
        $request->validate([
            'title' => ['required', 'unique:posts,slug'],
            'body' => ['required']
        ]);


        $post = Post::create([
            'slug' => $request['title'],
            'body' => $request->body,
            'author_id' => Auth::id()
        ]);

        return redirect("/post/$post->slug");
    }
}
