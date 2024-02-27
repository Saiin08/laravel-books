<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function index() {

        $user=Auth::user();
        // dd('dd from controller',$user);

        $crime_books = Book::where('category_id', 12)
        ->orderBy('publication_date', 'desc')
        ->limit(10)
        ->get();

        return view('index.index',compact('crime_books'));
    }
}
