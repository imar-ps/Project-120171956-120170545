<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('dashboard')->group(function (){
    Route::get('/', 'Dashboard\DashboardController@index');
    Route::resource('posts','Dashboard\PostController');
});

Route::get('/', 'FrontController@showHome')->name('front.home');
Route::get('/blog', 'FrontController@showBlog')->name('front.blog');
Route::get('/post', 'FrontController@showPost')->name('front.post');
Route::get('/about', 'FrontController@showAbout')->name('front.about');
Route::get('/contact', 'FrontController@showContact')->name('front.contact');

Route::resource('users','Dashboard\UserController');


