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

Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');


Route::get('train', 'TrainController@queryBuilder');
Route::get('orm', 'TrainController@orm');
Route::get('relationships', 'TrainController@relationShips');
Route::get('poly_relationships', 'TrainController@poly_relationships');
Route::get('encrypt', 'TrainController@encrypt');


Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function (){
    Route::get('/', 'DashboardController@index');
    Route::resource('posts','PostController');
    Route::resource('users','UserController');
});

Route::get('/', 'FrontController@showHome')->name('front.home');
Route::get('/blog', 'FrontController@showBlog')->name('front.blog');
Route::get('/post', 'FrontController@showPost')->name('front.post');
Route::get('/about', 'FrontController@showAbout')->name('front.about');
Route::get('/contact', 'FrontController@showContact')->name('front.contact');

//Route::resource('users','Dashboard\UserController');


