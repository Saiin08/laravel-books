@extends('layouts.main',[
    'current_page' => 'home'    
])

@section('content')
<h1>WELCOME
  @auth
      {{-- {{dd(auth()->user())}} --}}
      {{auth()->user()->name}}
  @endauth
</h1>

@include('common.search')

<h1>BookStore</h1>
<p>We are the best online bookstore ever...</p>

<div id="latest-books"></div>
@vite('resources/js/latest-books.js')

<div class="crime_books">
<h3>Crime Books</h3>
@foreach ($crime_books as $book)
    <div class="book">
        <p>{{$book->title}}</p>
    </div>
@endforeach
</div>
    
@endsection
  