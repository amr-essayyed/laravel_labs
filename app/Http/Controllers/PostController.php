<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index')->with( ["posts"=>"Posts Value"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return '{msg:"Store a newly created resource in storage."}';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $filter_options = ['options' => [ 'min_range' => 0]];

        if(filter_var( $id, FILTER_VALIDATE_INT, $filter_options )){
            return view('posts.show')->with(["id"=> $id]);
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

        if(filter_var( $id, FILTER_VALIDATE_INT, $filter_options )){
            return view('posts.edit')->with(["id"=> $id]);
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
            return "{msg:'Update the specified resource {$id} in storage.'}";
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
            return "{msg:'Remove the specified resource {$id} from storage.'}";
        }else{
            return view('notfound');
        }
    }
}
