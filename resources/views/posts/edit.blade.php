@extends('layouts.main')

@section('title', 'edit a post')

@section('content')

    <form action="/posts/{{ $id }}" method="POST">
        @csrf
        @method('PUT')  {{-- This tells Laravel to treat it as a PUT request --}}
        
        <h1>Show the form for editing the specified resource with id: {{$id}}.</h1>
    <input type="submit">
    </form>

    

@endsection
