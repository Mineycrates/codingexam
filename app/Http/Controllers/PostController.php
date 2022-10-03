<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){
        return view('create');
    }

    public function create(){
        $attributes = request()->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:255'      
        ]);

        Post::create($attributes);

        return redirect('/');
    }

    public function show(Post $post){
       // dd($post);
        
        return view('show', [
            'post' => $post
        ]);
    }
    public function delete(){
        $post = Post::find(request()->id);

        $post->delete();
        return redirect('/');
    }

    public function update(){
        $post = Post::find(request()->id);
        $post->update([
            'title' => request()->title,
            'body' => request()->body
        ]);

        return redirect('/');

    }

    public function upvote(){
        
        $post = Post::find(request()->id)->increment('upvotes');
       
        return redirect('/');
        
    }

    public function downvote(){
        $post = Post::find(request()->id)->increment('downvotes');

        return redirect('/');
        
    }

   
    
}
