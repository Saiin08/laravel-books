@extends('layouts.main',[
  'current_page'=>'home'
])

@section('content')
    <h1>{{$book->title}}</h1>
    {{-- {{dd($book->authors)}} --}}
    <h3>Written by: {{$book->authors->pluck('name')->join(', ')}}</h3>
    <img src="{{$book->image}}" alt="book_image">

    @auth
    <h2>Reviews:</h2>

    @if (count($errors) > 0)
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
    @endif

    {{-- Session::get('error-message') --}}
    @if(Session::has('error-message'))
      <div class="alert alert-danger">
        {{ Session::get('error-message') }}
      </div>
      <br><br>
    @endif

    <form action="{{route('book.review', ['id' => $book->id])}}" method="POST">
      @csrf
      <textarea name="text"  cols="30" rows="5" placeholder="say someting..."></textarea> <br><br>
      <button type="submit">Submit</button><br><br>
    </form>
    <hr>
        
    @endauth

    @foreach ($book->reviews as $review)
        <p>{{$review->text}}</p>
        <p>from User: {{$review->user->name}}</p>
        
      @auth
        <form action="/book/{{$book->id}}/review/{{$review->id}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Remove this review?')">Delete</button>
        </form>
      @endauth

        <hr>
    @endforeach
            

@endsection