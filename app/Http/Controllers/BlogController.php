<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request){
        if($request->search){
            $posts = Post::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('body', 'like', '%' . $request->search . '%')->latest()->paginate(4);
        } else if($request->category){
            $posts = Category::where('name', $request->category)->firstOrFail()
            ->posts()->paginate(3);
        }
        else{
            $posts = Post::latest()->paginate(4);
        }
      //  $posts = Post::get()->all();
        $cats= Category::all();
       // dd($posts);
        return view('Blog.Blog',compact('posts','cats'));
    }
    public function post($slug){

        $post= Post::where('slug',$slug)->first();
       // dd($post->image);
        $relatedPost = $post->category->posts()->where('id','!=',$post->id)->get();
        //dd($relatedPost);
        return view('Blog.Post',compact('post','relatedPost'));
    }
    public function postCreate(){
        $cats= Category::get()->all();
        return view('Blog.CreatePost',compact('cats'));
    }
    public function postStore(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required',
            'category_id' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug =  Str::slug($request->input('title'), '-');
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->input('category_id');
        $post->body =  $request->input('body');
        $post->image = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post->save();
       return redirect('blog')->with('status', 'Post Created Successfully');
    }
    public function postEdit(Post $post){
        //dd($post);
       $cats= Category::get()->all();
        return view('Blog.editPost',compact('post','cats'));
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
        $post->category_id = $request->input('category_id');
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

}
