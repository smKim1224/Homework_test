<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(request $request)
    {
        // DB에서 날짜별로 최근게시물 순으로 100개씩 보이도록 list를 만듬
        $posts = Post::orderby('created_at', 'desc') -> paginate(100);
        
        return view('list', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //입력값의 유효성 입증, 입력 안되면 다시하도록 함 
        $validateData = Validator::make($request->all(),[
            'name' => 'required',
            'title' => 'required',
            'contents' => 'required'
        ]);
        if ($validateData->fails())
        {
            return redirect()->back()->withErrors($validateData->errors())->withInput();
        }
        
        //create에서 받은 값을 DB에 저장
        $name = $request->input('name');
        $title = $request->input('title');
        $contents = $request->input('contents');

        $post = new Post;
        $post->name  = $name;
        $post->title  = $title;
        $post->contents = $contents;
        $post->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //DB에서 보내진 id만 찾아서 보여줌
        $post = Post::findOrFail($id);
        return view('/show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
