@extends('layouts.admin')

@section('content')
  <h1>HELLO </h1>
  <h1>Users</h1>
  {{-- React application will be rendered in here --}}
  <div id="root"></div>

@viteReactRefresh
@vite('resources/js/user-list/main.jsx')

@endsection
