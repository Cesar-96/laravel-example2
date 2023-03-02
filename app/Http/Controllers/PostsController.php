<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
//         return dd($posts = Post::all());
        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

//        return $request->all();


        //to create post in database
//          Post::create($request->all());

//        $input = $request->all();
//        $input['title']=$request->title;
//        Post::create($request->all());

        $post=new Post;
        $post->title= $request->title;
        $post->content="lalalalla";
        $post->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function contact(){

        $people = ['pablito','maria','jose'];
        return view('contact',compact('people'));
    }


    public function show_post($id, $name, $password){
        //return view('post')->with('id',$id);

        return view('post',compact('id','name','password'));

    }

    public function posting($id,$name,$pass){
        return view('posting',compact('id','name','pass'));
    }
}
