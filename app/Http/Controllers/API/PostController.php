<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
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
        $posts = Post::select('id', 'Title', 'Views')->where('Views', '>', 50)->get();
        $count = count($posts);
        return response([
           'status' => 'success',
           'count' => $count,
           'data' => $posts
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return response([
                'status' => 'error',
                'errors' => $validator->errors(),
            ]);
        }


        $post = Post::create([
            'Title' => $request->title,
            'Body' => $request->body,
            'Code' => $request->code,
            'author_email'=> $request->author_email,
            'category_id' => $request->category_id
        ]);

        return response([
            'status' => 'post created successfully',
            'post' => $post,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response([
            'status' => 'success',
            'data' => $post,
        ]);
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
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return response([
                'status' => 'error',
                'errors' => $validator->errors(),
            ]);
        }

        $post-> Title = $request->title;
        $post-> Body = $request->body;
        $post-> Code = $request->code;
        $post-> author_email = $request->author_email;
        $post-> category_id = $request->category_id;

        $post->save();

        return response([
            'status' => 'post updated successfully',
            'post' => $post,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response([
            'status' => 'post deleted successfully',
            'data' => $post,
        ]);
    }

}
