<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // factories
        // $user = User::factory()->count(10)->create();
        // $posts = Post::factory()->count(10)->create();

        return view('posts.index')->with( ["posts"=>Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create')->with(["users"=>User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create(array_merge ($request->all(),['user_id'=>1]));
        return redirect()->route('posts.index')
                     ->with('status', 'Post Created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $filter_options = ['options' => [ 'min_range' => 0]];

        if(filter_var( $id, FILTER_VALIDATE_INT, $filter_options )){
            
            return view('posts.show')->with(["id"=> $id, "post"=>Post::find($id)]);
        }else{
            return view('notfound');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $filter_options = ['options' => [ 'min_range' => 0]];
        $post = Post::find($id);
        $users = User::all();
        $user = User::find($post->user_id);
        if(filter_var( $id, FILTER_VALIDATE_INT, $filter_options )){
            return view('posts.edit')->with(["post"=> $post, "users"=>$users, "user"=>$user]);
        }else{
            return view('notfound');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filter_options = ['options' => [ 'min_range' => 0]];

        if(filter_var( $id, FILTER_VALIDATE_INT, $filter_options )){
            // return "{msg:'Update the specified resource {$id} in storage.'}";
            $post = Post::find($id);
            $post->update($request->all());
            return redirect()->route('posts.index')
                     ->with('status', 'Post Updated.');
        }else{
            return view('notfound');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filter_options = ['options' => [ 'min_range' => 0]];

        if(filter_var( $id, FILTER_VALIDATE_INT, $filter_options )){
            // return redirect()->route('posts.index');
            $post = Post::find($id);
            $post->delete();
            // $post->delete();
            return redirect()->route('posts.index')
                     ->with('status', 'Post moved to trash.');
        }else{
            return view('notfound');
        }
    }
}


// return redirect()->route('posts.show', ['post' => $post->id]);