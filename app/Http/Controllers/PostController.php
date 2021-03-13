<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    //
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'HTML', 'description' => 'This Is description', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'],
            ['id' => 2, 'title' => 'ANGULAR', 'description' => 'This Is description', 'posted_by' => 'Hassan', 'created_at' => '2021-03-13'],
        ];

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create(){
        return view('posts.create');
    }
}
