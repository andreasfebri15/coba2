<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content', [
            "title" => "All Posts",
            // "contents" => Post::all()
            // "contents" => Post::latest()->get()
            'contents' => Post::with(['author', 'category'])->latest()->get()

        ]);
    }

    // public function show($id)
    // {
    //     return view('content2', [
    //         "title" => "Single Post",
    //         "post" => Post::find($id)

    //     ]);
    // }

    //route model binding
    public function show(Post $post)
    {
        return view('content2', [
            "title" => "Single Post",
            "post" => $post

        ]);
    }
}
