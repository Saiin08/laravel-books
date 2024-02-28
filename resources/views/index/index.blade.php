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

<h1>BookStore</h1>
<p>We are the best online bookstore ever...</p>

<div id="latest-books">
</div>

@foreach ($crime_books as $book)
    <div class="book">
        <h3>{{$book->title}}</h3>
    </div>
@endforeach

@vite('resources/js/latest-books.js')
    
@endsection
  