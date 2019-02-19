<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story;
use Carbon\Carbon;

class BooksController extends Controller
{
    public function index()
    {
        $books = Story::with('user')->get();

        return view('backend.books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Story::with('user')->findOrFail($id);
        $createAt = Carbon::parse($book['created_at']);
        $updateAt = Carbon::parse($book['updated_at']);

        return view('backend.books.information', compact('book', 'createAt', 'updateAt'));
    }

    public function admin()
    {
        return view('backend.index');
    }

    public function chapter()
    {
        return view('backend.books.chapter');
    }

    public function review()
    {
        return view('backend.review');
    }

    public function detail()
    {
        return view('backend.books.detail');
    }
}
