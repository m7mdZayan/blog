<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    //
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'HTML', 'description' => 'Hyper Text Markup Language', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'],
            ['id' => 2, 'title' => 'ANGULAR', 'description' => 'Javascript Framework', 'posted_by' => 'Hassan', 'created_at' => '2021-03-13'],
        ];

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post)
    {
       $post = ['id' => 1, 'title' => 'HTML', 'description' => 'Hyper Text Markup Language', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'];

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

    public function create(){
        return view('posts.create');
    }
}
