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
