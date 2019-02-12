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
Route::get('/', function () {
    return view('front.home');
})->name('home');
// Category
Route::get('/stories/{slug}', function () {
    return view('front.stories');
})->name('meta');
// Story details
Route::get('/story/{id}', function () {
    if (Request::ajax()) {
        return view('front.story_preview');
    } else {
        return view('front.story');
    }
})->name('story');
// Story part
Route::get('/{id}', function() {
    return view('front.part');
})->name('part');

Route::get('admin', function(){
return view('backend.index');
})->name('admin');

Route::get('admin/users', function(){
return view('backend.users.index');
})->name('user');

Route::get('admin/user/create', function(){
return view('backend.users.create');
})->name('adduser');

Route::get('admin/categories', function(){
return view('backend.category');
})->name('categories');

Route::get('admin/user/id/update', function(){
return view('backend.users.update');
})->name('updateuser');

Route::get('admin/books', function(){
return view('backend.books.index');
})->name('book');

Route::get('admin/book/id', function(){
return view('backend.books.detail');
})->name('bookdetail');

Route::get('admin/book/info', function(){
return view('backend.books.information');
})->name('bookinfo');

Route::get('admin/comment/books', function(){
return view('backend.comments.bookcm');
})->name('bookcomment');

Route::get('admin/comment/reviews', function(){
return view('backend.comments.reviewcm');
})->name('reviewcomment');

Route::get('admin/book/id/chapter', function(){
return view('backend.books.chapter');
})->name('chapter');

Route::get('admin/reviews', function(){
return view('backend.review');
})->name('review');

Route::get('admin/comment/reply', function(){
return view('backend.comments.reply');
})->name('reply');

Route::get('admin/reports', function(){
return view('backend.reports.index');
})->name('report');

Route::get('admin/report/update', function(){
return view('backend.reports.update');
})->name('updatereport');

Route::get('admin/banner', function(){
return view('backend.banners/index');
})->name('banner');

Route::get('admin/banner/create', function(){
return view('backend.banners/create');
})->name('addbanner');

Route::get('admin/banner/update', function(){
return view('backend.banners/update');
})->name('updatebanner');
