<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Phone;
use App\Post;
use App\Role;
use App\User;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\DocBlock\Tag;

class TrainController extends Controller
{

    public function encrypt(){

        $message = 'Welcome!';

        /*$hashed = Hash::make($message);
        dd($hashed);*/

        /*$encrypted = encrypt($message);
        dd($encrypted);

        $decrypted = decrypt($encrypted);
        dd($decrypted);*/

    }


    public function poly_relationships(){

        /*$user = User::find(22);
        dd($user->image);
        dd($user->image->url);*/

        /*$post = Post::find(32);
        dd($post->image);
        dd($post->image->url);*/

        /*$video = Video::find(18);
        dd($video->shares);*/

        /*$post = Post::find(55);
        dd($post->shares);*/

        /*$post = Post::find(92);
        dd($post->tags);*/

        /*$video = Video::find(62);
        dd($video->tags);*/

        /*$tag = Tag::find(1);
        dd($tag->posts);*/

        /*$tag = Tag::find(62);
        dd($tag->videos);*/

    }


    public function relationShips(){

        /*$user = User::find(3);
        dd($user->phone);*/

        /*$phone = Phone::find(4);
        dd($phone->user);
        dd($phone->user->name);*/

        /*$post = Post::find(5);
        foreach ($post->comments as $comment){
            echo $comment->email.'<br>';
        }
        dd();
        dd($post->comments);*/

        /*$comment = Comment::find(6);
        dd($comment->post);
        dd($comment->post->Title);*/

        /*$user = User::find(10);
        dd($user->roles);*/

        /*$role = Role::find(8);
        dd($role->users);*/

    }


    public function orm(){

//        $categories = Category::all();
//        $categories = Category::where('id', '>', 5)->get();
//        $categories = Category::find(1);
//        $categories = Category::find([1,2,3]);
//        $categories = Category::findorfail(100);
//        dd($categories);
//        dd(Post::min('Views'));
//        dd(Post::max('Views'));
//        dd(Post::avg('Views'));

        /*$category = new Category();
        $category -> Name = 'zzzzz';
        $category -> Code = 'ZZZ';
        $category -> save();*/

        /*$category = Category::create([
            'Name'=>'aaaaa',
            'Code'=>'AAA'
        ]);*/

        /*$category = Category::find(2);
        $category -> Name = 'mamma';
        $category -> save();*/

        /*$category = Category::where('id' , '>', 5)->update(
            ['created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
        );*/

//        $category = Category::find(6)-> delete();
//        $category = Category::destroy(13);
//        $category = Category::destroy([14,15]);

//        $category = Category::withTrashed()->get();
//        $category = Category::onlyTrashed()->get();
//        $category = Category::onlyTrashed()->restore();

//        dd($category);


    }


    public function queryBuilder(){

        //        $posts = Post::all();
//        $posts = DB::table('posts')->get();
//        $posts = DB::table('posts')->find('10');
//        $posts = DB::table('posts')->pluck('Title');
//        $posts = DB::table('posts')->limit(10)->get();
//        $posts = DB::table('posts')->skip(5)->take(10)->get();
//        $posts = DB::table('posts')->where('category_id', 2)->get();
//        $posts = DB::table('posts')->where('category_id', 2)->first();
//        $posts = DB::table('posts')->where('category_id', '<', 5)->get();
//        $posts = DB::table('posts')->whereIn('category_id', [5,10])->get();
//        $posts = DB::table('posts')->whereBetween('category_id', [1,10])->get();

        /*$posts = DB::table('posts')->where([
            ['category_id', 2],
            ['user_id', '>=', 8]
        ])->get();*/

        /*$posts = DB::table('posts')
            ->where('user_id', 10)
            ->select('Title', 'Views')
            ->get();*/

        /*$posts = DB::table('posts')
            ->where('category_id', 7)
            ->select('Title', 'Views' , "Shares")
            ->orderBy('Views')
            ->orderBy('Shares' , 'desc')
            ->get();*/

//        $posts = DB::table('posts')->avg('Views');
//        $posts = DB::table('posts')->min('Shares');
//        $posts = DB::table('posts')->max('Shares');

        /*$posts = DB::table('posts')->orderBy('Shares')->chunk(10, function ($items){
            foreach ($items as $item){
                echo $item->Shares.' '.$item->Title.'<br>';
            }
        });
        dd();*/

        /*$posts = DB::table('posts')
            ->join('categories', 'categories.id', 'posts.category_id')
            ->select('posts.Title', 'categories.Name')
            ->get();*/

//        dd($posts);

        /*DB::table('categories')->insert([
            'Name' => 'mar',
            'Code' => 'MAR',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);*/

        /*DB::table('categories')->insert([
            ['Name' => 'mar', 'Code' => 'MAR', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['Name' => 'cafe', 'Code' => 'CAF', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
        ]);*/

//        DB::table('categories')->where('id', 24)->update(['Name'=>'cfffa' , 'Code'=>'CFA']);
//        DB::table('posts')->where('id', 1)->increment('Views',5);
//        DB::table('posts')->where('id', 2)->decrement('Views',5);
//        DB::table('posts')->where('id', 20)->delete();

    }

}
