@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.author.store')}}" method="POST">
      @csrf
      <label for="slug">Slug: </label><br>
      <input type="text" name='slug' ><br>
      <label for="name">Name: </label><br>
      <input type="text" name="name" ><br>
      <label for="bio">Bio:</label><br>
      <input type="text" name="bio" ><br><br>
      <button type="submit">Add Author</button>

    </form>
@endsection