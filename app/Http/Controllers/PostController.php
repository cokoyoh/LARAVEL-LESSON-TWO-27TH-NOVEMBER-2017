<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => Auth::user()->id
        ]);
        $message = 'Post created successfully';
        session()->flash('message', $message);
        return redirect(route('posts.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if(! $post){
             $message = 'The post does not exist';
            session()->flash('message', $message);
        }
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(! $post){
             $message = 'Resource not found!';
            session()->flash('message', $message);
        }
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post = Post::find($id);
        $post->title =  request('title');
        $post->body =  request('body');
        $post->save();
        $message = 'Post has been edited successfully';
        session()->flash('message', $message);
        return redirect(route('posts.user_posts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(! $post){
            $message = 'You are trying to delete a post that does not exist!';
            session()->flash('message', $message);
        }
        $post->delete();
        $message = 'Post has been deleted!';
        session()->flash('message', $message);
        return redirect(route('posts.user_posts'));
    }
}
