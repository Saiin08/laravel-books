<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use Symfony\Contracts\Service\Attribute\Required;

class AuthorController extends Controller
{
    public function index(){
        $authors=Author::limit(20)
        ->get();

        return view('admin.authors.index',compact('authors'));
    }

    public function create() {
        return view('admin.authors.create');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'slug'=>'required',
            'name'=>'required',
        ]);

        $author = new Author;
        $author->slug = $request->input('slug') ;
        $author->name = $request->input('name') ;
        $author->bio = $request->input('bio');
        $author->save();

        return redirect()->route('admin.author.index');

    }
}
