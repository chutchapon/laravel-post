<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $posts = [
            'posts' => $posts,
        ];
        return view('posts.home', $posts);
    }
    public function create()
    {
        $categories = Category::all();
        $categories = [
            'categories' => $categories,
        ];
        return view('posts.create', $categories);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = auth()->user()->id;
        if ($request->hasFile('thumbnail')) {
            $filenameWithExt = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('thumbnail')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->detail = $request->detail;
        $post->thumbnail = $fileNameToStore;
        $post->save();
        return redirect('/');
    }
    public function edit($post_id)
    {
        $categories = Category::all();
        $categories = [
            'categories' => $categories,
        ];
        $post = Post::find($post_id);
        $post = [
            'post' => $post,
        ];
        return view('posts.edit', $post, $categories);
    }
}
