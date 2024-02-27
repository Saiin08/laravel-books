@extends('layouts.admin')

@section('content')
    <form action="" method="POST">
      @csrf
      <label for="slug">Slug: </label><br>
      <input type="text" name='slug' ><br>
      <label for="title">Title: </label><br>
      <input type="text" name="title" ><br>
      <label for="category_id">Category id: </label><br>
      <input type="text" name="category_id" ><br>
      <label for="price">Price: </label><br>
      <input type="text" name="price"><br><br>
      
      <button type="submit">Add Author</button>
    </form>
@endsection