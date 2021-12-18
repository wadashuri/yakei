<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample',function (){
    return 'abc';
});
Route::get('/serch','PostController@serch');

Route::resource('posts','PostController');

Route::resource('likes','LikeController')->only([
    'index','store','destroy'
    ]);
    
Route::resource('follows','FollowController')->only([
    'index','store','destroy'
    ]);

Route::get('/follower','FollowController@followerIndex');

Auth::routes();

Route::get('/posts/{post}/edit_image', 'PostController@editImage')->name('posts.edit_image');
 
Route::patch('/posts/{post}/edit_image', 'PostController@updateImage')->name('posts.update_image');

Route::resource('users', 'UserController');

Route::patch('/posts/{post}/toggle_like', 'PostController@toggleLike')->name('posts.toggle_like');

