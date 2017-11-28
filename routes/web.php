<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
Route::get('/my-posts','FindPostController@userPosts')->name('my_posts');
