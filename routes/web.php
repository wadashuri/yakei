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

Route::resource('posts','PostController');

Route::resource('likes','LikeController')->only([
    'index','store','destroy'
    ]);
    
Route::resource('follows','FollowController')->only([
    'index','store','destroy'
    ]);

Route::get('/follower','FollowController@followerIndex');

Auth::routes();