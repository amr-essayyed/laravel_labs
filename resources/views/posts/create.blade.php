@extends('layouts.main')

@section('title', 'create a post')

@section('content')
    <h1>Show the form for creating a new resource.</h1>
    
    <form action="/posts" method="POST">
        @csrf    
        <input type="submit">
    </form>
@endsection
