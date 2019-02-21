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
// profile
Route::get('/user/{user_name}', 'UserController@index')->name('user_about');
Route::get('/user/{user_name}/activity', 'UserController@conversations')->name('user_conversations');
Route::get('/user/{user_name}/following', 'UserController@following')->name('user_following');

Route::group(array('namespace' => 'Admin'), function () {
    Route::get('admin/users', 'UsersController@index')->name('user');
    Route::get('admin/user/{id?}/update', 'UsersController@edit')->name('updateuser');
    Route::post('admin/user/{id?}/update', 'UsersController@update');
    Route::get('admin/categories', 'CategoriesController@index')->name('categories');
    Route::post('admin/categories', 'CategoriesController@store');
    Route::get('admin/categories/{id?}', 'CategoriesController@edit')->name('updatecate');
    Route::post('admin/categories/{id?}', 'CategoriesController@update');
    Route::get('admin/categories/{id}/delete', 'CategoriesController@destroy')->name('deletecate');
    Route::get('admin/users/create', 'UsersController@create')->name('adduser');
    Route::post('admin/users/create', 'UsersController@store');
    Route::get('admin/user/delete/{id}', 'UsersController@destroy')->name('deleteuser');
    Route::get('admin/books', 'BooksController@index')->name('book');
    Route::get('admin/book/{id}/info', 'BooksController@show')->name('bookinfo');
    Route::get('admin', 'BooksController@admin')->name('admin');
    Route::get('admin/book/id/chapter', 'BooksController@chapter')->name('chapter');
    Route::get('admin/reviews', 'BooksController@review')->name('review');
    Route::get('admin/book/id', 'BooksController@detail')->name('bookdetail');
});

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')
        ->name('change-language');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index');
