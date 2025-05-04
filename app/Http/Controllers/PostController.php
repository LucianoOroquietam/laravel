<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function posts($post)
    {
        /**
         *
         * ,['post' => $post ] 1 forma
         *   compact ('post'); que seria == ['posts' => $post]; es un array asociativo
         */
        return view('posts.posts', compact('post'));
    }

    public function postsCategory($post, $category = null)
    {

        /* una forma de pasarlo a la view
        if(isset($category)){
            return view('posts.postsCategory', compact('post','category'));
        }
        return view('posts.postsCategory', compact('post'));
        */

        //otra forma para pasar el parametro como de costumbre
        $data = compact('post');
        if ($category !== null) {
            $data['category'] = $category;
        }
        return view('posts.postsCategory', $data);
    }
}
