@extends('layouts.main')

@section('title', 'posts')

@section('content')
    <h1>posts index Page</h1>
    <div class="posts-container">{{$posts}}</div>
@endsection
