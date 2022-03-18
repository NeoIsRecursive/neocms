<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AllPostsController extends Controller
{

    public function __invoke(Request $request)
    {
        $posts = Post::select([
            'posts.id',
            'users.name as author',
            'posts.slug',
        ])->join('users', 'author_id', 'users.id')->paginate();

        return view('post.all')->with('posts', $posts);
    }
}
