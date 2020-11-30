<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function showHome(){
        return view('front.home');

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


