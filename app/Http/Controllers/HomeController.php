<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::all();
        $banners = [
            'banners' => $banners,
        ];
        $posts = Post::all();
        $posts = [
            'posts' => $posts,
        ];

        return view('home', $banners, $posts);
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
            $filenameWithExt= $request->file('thumbnail')-> getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
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

    // check is url
    // public function isUrl($url)
    // {
    //     return preg_match('/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}' . '((:[0-9]{1,5})?\\/.*)?$/i', $url);
    // }
}
