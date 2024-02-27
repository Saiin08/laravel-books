@extends('layouts.admin')

@section('content')
    <a href="{{route('admin.book.create')}}">Add new book</a>
    <ul class="book">
      @foreach ($books as $book)
          <li>
            {{$book->title}}
          </li>
      @endforeach
    </ul>
@endsection