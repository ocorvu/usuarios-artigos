<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index(Posts $posts)
    {
        $posts = $posts->all();
        return view('Posts.posts', compact('posts'));
    }


    public function create()
    {
        return view('Posts.newPost');
    }

    public function store(Posts $posts, Request $request)
    {
        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->slug = Str::slug($posts->title, '-');
        $posts->content = $request->content;
        $posts->save();

        return redirect()->route('posts.index');
    }


    public function show(Posts $post)
    {
        $post = $post->only([
            'title',
            'subtitle',
            'author',
            'content',
            'created_at'
        ]);
        return view('Posts.post')->with([
            'post' => $post
        ]);
    }


    public function edit(Posts $posts)
    {
        //
    }


    public function update(Request $request, Posts $posts)
    {
        //
    }


    public function destroy(Posts $posts)
    {
        //
    }
}
