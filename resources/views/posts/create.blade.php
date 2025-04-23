@extends('layouts.main')

@section('title', 'create a post')

@section('content')
     <form action="{{route('posts.store')}}" method="POST">
        @csrf
        
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend">Add Post</legend>
            
            <label class="label">Title</label>
            <input name="title" type="text" class="input" placeholder="Title" />
            
            <label class="label">Body</label>
            <textarea name="body" class="textarea" placeholder="Body"></textarea>
            
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option>{{ $user->name }}</option>
                @endforeach
            </select>

            <input type="submit" class="btn">
        </fieldset>
        
    </form>

@endsection
