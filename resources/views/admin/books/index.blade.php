@extends('layouts.admin')

@section('content')
    <a href="{{route('admin.book.create')}}">Add new book</a>
    <ul class="book">
      @foreach ($books as $book)
          <li>
            {{$book->title}}
            <a href="{{ route('admin.book.edit', ['id' => $book->id]) }}">Edit</a>
          </li>
      @endforeach
    </ul>
@endsection