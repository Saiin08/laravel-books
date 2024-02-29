<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function show($id) {
        $book= Book::findOrFail($id);

        return view('books.show',compact('book'));

    }

    public function review(Request $request ,$id) {
        $this->validate($request,[
            'text'=>'required|max:255'
        ],[
            'text.required' => 'Please add some reviews'
        ]);

        // try to find a review with the passed in book id ($id) and the logged in user id (Auth::id())
        $user_id= Auth::id();
        $existingReview = Review::where('book_id',$id)
            ->where('user_id',$user_id)
            ->first();

        // if you find a review with this combination, redirect back (redirect()->back()->with('error-name', 'combination exists')) -> Session::get('error-name')
        if($existingReview) {
            return redirect()->back()->with('error-message','combination exists❗️'); //-> Session::get('error-message');
        }

        $user=Auth::user();
        $book= Book::findOrFail($id);

        $review = New Review;
        $review->user_id = $user->id;
        $review->book_id = $book->id;
        $review->text = $request->input('text');
        $review->save();

        return redirect()->route('book.show',['id'=>$book->id]);


    }
}
