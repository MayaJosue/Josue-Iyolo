<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('posts.index');
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Post $post)
    {
        return view('posts.show');
    }


    public function edit(Post $post)
    {
        return view('posts.edit');
    }


    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
