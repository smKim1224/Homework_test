<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function list(request $request)
    {
        $posts = Post::orderby('created_at', 'desc') -> paginate(10);
        
        return view('list', ['posts'=>$posts]);
            
    }
        
    public function create()
    {
        return view('create');
    }

    public function store(request $request)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $contents = $request->input('contents');
        
        $post = new Post;
        $post->name  = $name;
        $post->title  = $title;
        $post->contents = $contents;
        $post->save();
        
        return redirect("/");
    }


    public function show(Post $posts)
    {
        return view('show', ['post'=> $posts]);
    }
}