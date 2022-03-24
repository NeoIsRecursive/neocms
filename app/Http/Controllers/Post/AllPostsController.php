<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Neoisrecursive\Emojify\Emojify;

class AllPostsController extends Controller
{

    public function __invoke(Request $request)
    {
        $posts = Post::select([
            'posts.id',
            'users.name as author',
            'posts.slug',
            'posts.created_at',
        ])->join('users', 'author_id', 'users.id')->orderByDesc('posts.created_at')->paginate();

        $emojify = new Emojify();

        $posts->map(function ($e) use ($emojify) {
            $e->title = $emojify->emojifyString($e->slug);
            return $e;
        });
        return view('post.all')->with('posts', $posts);
    }
}
