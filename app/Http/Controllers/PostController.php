<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.home', compact('posts')); 
    }
    
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body'  => 'required',
            'category' => 'required',
        ]);

        Post::create($validated);
        return redirect()->route('posts.home')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }


    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category'=> 'required'
        ]);

        $post = Post::FindOrFail($id);
        $post->update($validated);
        
        return redirect()->route('posts.home')->with('success','Post Updated Successfully!');     
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.home')->with('success','Post Deleted Successfully!');
    }

    
}
