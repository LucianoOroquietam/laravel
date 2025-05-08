<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('posts.home', compact('posts'));
    }

    public function createPost()
    {
        return view('posts.create');
    }

    public function postCreated(Request $request){
        $post = new Post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->published_at = Carbon::parse($request->published_at);

        $post->save();

        return redirect('/posts')->with('success', 'El post fue creado con exito');
    }

    public function editPost($idPost){
        $post = Post::find($idPost);
        return view('posts.edit', compact('post'));
    }

    public function postEdited($idPost, Request $request){
        $post = POST::find($idPost);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->published_at = $request->published_at
        ? Carbon::createFromFormat('Y-m-d', $request->published_at)
        : null;

        $post->save();

        return redirect("/")->with('success', 'El post fue editado con exito');
    }

    public function postsById($post)
    {
        $post = Post::find($post);
        return view('posts.posts', compact('post'));
    }

    public function deletePost($idPost){
        $post = Post::findOrFail($idPost);
        $post->delete();

        return redirect('/posts')->with('success', 'Post eliminado correctamente');


    }

    public function postsCategory($post, $category = null)
    {
        $data = compact('post');
        if ($category !== null) {
            $data['category'] = $category;
        }
        return view('posts.postsCategory', $data);
    }
}
