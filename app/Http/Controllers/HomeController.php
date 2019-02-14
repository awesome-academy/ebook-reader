<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function meta()
    {
        return view('front.stories');
    }

    public function story()
    {
        if (Request::ajax()) {
            return view('front.story_preview');
        } else {
            return view('front.story');
        }
    }

    public function part()
    {
        return view('front.part');
    }

    public function login()
    {
        return view('front.login');
    }

    public function register()
    {
        return view('front.register');
    }
}
