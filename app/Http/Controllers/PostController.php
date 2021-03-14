<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
//use http\Env\Request;
use Illuminate\Http\Request;

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
        $post = Post::find($post);
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit($post){
        //$post = ['id' => 1, 'title' => 'HTML', 'description' => 'Hyper Text Markup Language', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'];
        $post = Post::find($post);
        return view('posts.edit', [
            'post' => $post
        ]);

    }

    public function delete($post){
        //$post = ['id' => 1, 'title' => 'HTML', 'description' => 'Hyper Text Markup Language', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-14'];
        $post = Post::find($post);
        return view('posts.destroy', [
            'post' => $post
        ]);

    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        Post::where('id', $id)->delete();

        return redirect()->route('posts.index');
    }

    public function store(Request $myRequest): \Illuminate\Http\RedirectResponse
    {
        $data = \request()->all();

        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function create(){
        return view('posts.create',['users' => User::all()]);
    }

    public function update(Request $request, Post $post): \Illuminate\Http\RedirectResponse
    {

        $post->update($request->all());

        return redirect()->route('posts.index')
            ->with('success','post updated successfully');



  //      var_dump($request->all());
       // dd($request->all());

       // Post::where('id', $id)
         //   ->update($request->all());

    }
}
