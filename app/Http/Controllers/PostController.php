<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", ["posts"=>$posts]);
    }

    public function create()
    {
        return view("posts.create") ;
    }

    public function show($id)
    {
        $post = Post::find($id);

        if($post == null){
            return abort(404);
        }

        return view("posts.show", ["post"=>$post]);
    }


    public function edit($id){
        $post = Post::find($id);
        return view("posts.edit", ["post"=>$post]);
    }


    public function createOne(Request $request){
        $post = new Post();

        $title = $request->input('title');
        $content = $request->input('content');

        $post->title = $title;
        $post->content = $content;
        $post->published_at = now();
        
        $post->save();
        
        return redirect('/posts');
    }

    public function update(Request $request, $id){
        
        $title = $request->input('title');
        $content = $request->input('content');
        
        $post = Post::find($id);
        $post->title = $title;
        $post->content = $content;
        $post->save();
        
        
        return redirect('/posts');
    }






    

}
