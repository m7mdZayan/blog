<?php

namespace App\Http\Controllers;


use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post)
    {
       //$post = ['id' => 1, 'title' => 'HTML', 'description' => 'Hyper Text Markup Language', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'];
        $post = Post::find($post);
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(){
        $post = ['id' => 1, 'title' => 'HTML', 'description' => 'Hyper Text Markup Language', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'];

        return view('posts.edit', [
            'post' => $post
        ]);

    }

    public function destroy(){
        $post = ['id' => 1, 'title' => 'HTML', 'description' => 'Hyper Text Markup Language', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'];

        return view('posts.destroy', [
            'post' => $post
        ]);

    }

    public function create(){
        return view('posts.create');
    }
}
