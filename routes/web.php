<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('posts', 'PostController@index')->name('posts.index');

Route::prefix('posts')->middleware('auth')->group(function () {
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::post('store', 'PostController@store');
    Route::get('{post:slug}/edit', 'PostController@edit');
    Route::patch('{post:slug}/edit', 'PostController@update');
    Route::delete('{post:slug}/delete', 'PostController@destroy');
});

Route::get('categories/{category:slug}', 'CategoryController@show');

Route::get('tags/{tag:slug}', 'TagController@show');

Route::get('posts/{post:slug}', 'PostController@show');

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
