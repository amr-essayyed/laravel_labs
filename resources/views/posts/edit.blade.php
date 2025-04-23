@extends('layouts.main')

@section('title', 'edit a post')

@section('content')

    <form action="{{route('posts.update', ['id' => $post->id])}}" method="POST">
        @csrf
        @method('PUT') 
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend">Add Post</legend>
            
            <label class="label">Title</label>
            <input name="title" type="text" class="input" placeholder="Title" value="{{$post->title}}" />
            
            <label class="label">Body</label>
            <textarea name="body" class="textarea" placeholder="Body" >{{$post->body}}</textarea>
            
            <select name="user_name" id="user_id" value="{{$user}}" >
                @foreach ($users as $user)
                    <option>{{ $user->name }}</option>
                @endforeach
            </select>

            <input type="submit" class="btn">
        </fieldset>
    </form>

    

@endsection
