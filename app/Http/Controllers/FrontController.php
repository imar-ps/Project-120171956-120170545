<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function showHome(){
        $posts = Post::paginate(12);
        return view('front.home')->with('posts',$posts);

    }

    public function showBlog(){
        return view('front.blog');

    }

    public function showPost(){
        return view('front.post');

    }

    public function showAbout(){
        return view('front.about');

    }

    public function showContact(){
        return view('front.contact');

    }
}


