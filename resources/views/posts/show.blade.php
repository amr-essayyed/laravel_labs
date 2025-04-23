@extends('layouts.main')

@section('title', 'post')

@section('content')
    <div class="card w-9/12 m-4 p-4 border-1 border-gray-200 shadow-[3px_3px_5px_gray]">
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <div>{{ $post->body }}</div>
        <div>by user:{{ $post->user_id }}</div>
        <div>created at: {{ $post->created_at }}</div>

    </div>
@endsection