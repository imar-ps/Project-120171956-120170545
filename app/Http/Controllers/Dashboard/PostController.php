<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::all();
//        $posts = Post::orderBy('created_at', 'desc')->get();

        /*Session::put('course', 'STW');
        dd(Session::get('course'));*/

//        Cookie::queue('college', 'IT', 60*24*2);

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        /*$request->validate([
           'Title' => 'required|max:50',
           'Body' => 'required',
           'Code' => 'required|unique:posts|integer',
           'author_email' => 'required|email',
           'category_id' => 'required|integer'
        ]);*/

        $rules = [
            'title' => 'required|max:50',
            'body' => 'required',
            'code' => 'required|unique:posts|integer',
            'author_email' => 'required|email',
            'category_id' => 'required|integer',
            'post_image' => 'required|mimes:jpeg,jpg,png,bmp'

        ];

        $messages = [
            'title.required' => 'The Post title field s required',
            'title.max' => 'Title should not be more than 50 character.',
            'code.unique' => 'Code must be unique.',
            'code.integer' => 'Code must be integer.',
            'author_email.email' => 'Invalid email.',
            'post_image.mimes' => 'Invalid image format.'

        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


//        dd($request->toArray());
        $post = new Post();
        $post-> Title = $request->title;
        $post-> Body = $request->body;
        $post-> Code = $request->code;
        $post-> author_email = $request->author_email;
        $post-> category_id = $request->category_id;

        $postImage = $request->file('post_image');
        $fileName = time().'.'.$postImage->extension();
        $postImage->move('post_images',$fileName);
        $post->Image = $fileName;

        $post->save();

        return redirect()->route('dashboard.posts.index')->with('success', 'Post created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.posts.edit', compact('post', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
//        dd($request->toArray());
        $post-> Title = $request->title;
        $post-> Body = $request->body;
        $post-> category_id = $request->category_id;

        $post->save();

        return redirect()->route('dashboard.posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post -> delete();

        return redirect()->route('dashboard.posts.index');

    }
}
