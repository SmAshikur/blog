<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::get()->all();
        return view('Blog.Blog',compact('posts'));
    }
    public function post($slug){

        $post= Post::where('slug',$slug)->first();
       // dd($post->image);
        return view('Blog.Post',compact('post'));
    }
    public function postCreate(){
        return view('Blog.CreatePost');
    }
    public function postStore(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug =  Str::slug($request->input('title'), '-');
        $post->user_id = Auth::user()->id;
        $post->body =  $request->input('body');
        $post->image = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post->save();
       return redirect('blog')->with('status', 'Post Created Successfully');
    }
    public function postEdit(Post $post){
       // dd($post->image);
        return view('Blog.editPost',compact('post'));
    }
    public function postUpdate(Request $request, Post $post){
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required',
        ]);

        $post->title = $request->input('title');
        $post->slug =  Str::slug($request->input('title'), '-');
        $post->user_id = Auth::user()->id;
        $post->body =  $request->input('body');
        $post->image = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post->save();
       return redirect('blog')->with('status', 'Post Edited Successfully');
    }
    public function postDelete(Post $post){
        $post->delete();
        return redirect('blog')->with('status', 'Post deleted Successfully');
    }
    public function categoryCreate(){
        return view('Blog.createCategory');
    }
    public function categoryView(){
        return view('Blog.categoryList');
    }
}
