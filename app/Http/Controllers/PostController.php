<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // GET ALL POSTS
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    // CREATE A NEW POST
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }
}
