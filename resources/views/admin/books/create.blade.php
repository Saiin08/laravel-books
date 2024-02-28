@extends('layouts.admin')

@section('content')

  @if ($book->id)
      <h2>Edit book #{{$book->id}}</h2>
  @else
      <h2>Add new book</h2>
  @endif

  @if (Session::has('success_message'))
      <div class="alert alert-success">
          {{ Session::get('success_message') }}
      </div>
  @endif

  @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif



  @if ($book->id)
      <form action="{{ route('admin.book.update', ['id' => $book->id]) }}"  method="post">
        @method('PUT')
  @else
      <form action="{{route('admin.book.store')}}" method="POST">
  @endif

      @csrf
      <label for="slug">Slug: </label><br>
      <input type="text" name='slug' ><br>
      <label for="title">Title: </label><br>
      <input type="text" name="title" ><br>
      <label for="category_id">Category id: </label><br>
      <input type="text" name="category_id" ><br>
      <label for="price">Price: </label><br>
      <input type="text" name="price"><br><br>
      
      <button type="submit">Save</button>
    </form>
@endsection