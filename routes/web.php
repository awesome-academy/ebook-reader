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

// Home
Route::get('/', 'HomeController@index')->name('home');

// Category
Route::get('/stories/{slug}', 'HomeController@meta')->name('meta');
// Story details
Route::get('/story/{id}', 'HomeController@story')->name('story');
// Story part
Route::get('/{id}', 'HomeController@part')->name('part');
// Login
Route::get('/login', 'HomeController@login')->name('login');
// Register
Route::get('/register', 'HomeController@register')->name('register');
// profile
Route::get('/user/{user_name}', 'UserController@index')->name('user_about');
Route::get('/user/{user_name}/activity', 'UserController@conversations')->name('user_conversations');
Route::get('/user/{user_name}/following', 'UserController@following')->name('user_following');

Route::group(array('namespace' => 'Admin'), function () {
    Route::get('admin/users', 'UserController@index')->name('user');
    Route::get('admin/user/{id?}/update', 'UserController@edit')->name('updateuser');
    Route::post('admin/user/{id?}/update', 'UserController@update');
    Route::get('admin/categories', 'CategoryController@index')->name('categories');
    Route::post('admin/categories', 'CategoryController@store');
    Route::get('admin/categories/{id?}', 'CategoryController@edit')->name('updatecate');
    Route::post('admin/categories/{id?}', 'CategoryController@update');
    Route::get('admin/categories/{id}/delete', 'CategoryController@destroy')->name('deletecate');
    Route::get('admin/users/create', 'UserController@create')->name('adduser');
    Route::post('admin/users/create', 'UserController@store');
    Route::get('admin/user/delete/{id}', 'UserController@destroy')->name('deleteuser');
    Route::get('admin/stories', 'StoryController@index')->name('book');
    Route::get('admin/story/{id}/info', 'StoryController@show')->name('bookinfo');
    Route::get('admin', 'StoryController@admin')->name('admin');
    Route::get('admin/story/id/chapter', 'StoryController@chapter')->name('chapter');
    Route::get('admin/reviews', 'StoryController@review')->name('review');
    Route::get('admin/story/id', 'StoryController@detail')->name('bookdetail');
});

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')
        ->name('change-language');
});
