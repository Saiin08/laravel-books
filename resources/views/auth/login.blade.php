@extends('layouts.main',[
  'current_page'=>'register'
])



@section('content')

  @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif
  
<form action="{{ route('login') }}" method="post">
 
    @csrf
 
    <input type="email" name="email" value="{{ old('email') }}">
 
    <input type="password" name="password" value="">
 
    <button>Login</button>

</form>
@endsection
