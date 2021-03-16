@extends('layouts.app')


@section('content')
    <div class="text-center">
        <a href={{route('posts.create')}} class="btn btn-primary ">Create Post</a>
    </div>

    <table class="table mt-5 container text-center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">posted by</th>
            <th scope="col">created at</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post->user ? $post->user->name : 'user not found'}}</td>
                <td>{{$post['created_at']->format('y-m-d')}}</td>
                <td class="col">
                    <a href={{route('posts.show',$post)}} class="btn btn-info">View</a>
                    <a href={{route('posts.edit',$post)}} class="btn btn-success">Edit</a>
                    <a href={{route('posts.delete',$post)}} class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

        {{ $posts->links() }}

        </tbody>
    </table>
@endsection

