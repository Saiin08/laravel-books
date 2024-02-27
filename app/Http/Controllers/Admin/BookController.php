<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::orderBy('id','DESC')
        ->limit(20)
        ->get();

        return view('admin.books.index',compact('books'));
    }

    public function create() {
        return view('admin.books.create');
    }
}
