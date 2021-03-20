<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {

        $posts = Post::all();

        return PostResource::collection($posts);
    }

    public function show($id){
        $post = Post::find($id);

        return new PostResource($post);
    }
}
