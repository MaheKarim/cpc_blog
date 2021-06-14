<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(  ) {
        $posts = Post::all();
        return view('backend.post.index', compact('posts'));
    }

    public function store(Request $request) {

        $post =  new Post();
        $post->fill($request->all());
        $post->save();

        return redirect()->route('post.index');
    }
}
