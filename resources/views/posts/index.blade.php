@extends('layouts.app')


@section('content')
    <div class="text-center">
        <a href={{route('posts.create')}} class="btn btn-primary ">Create Post</a>
    </div>

    <table class="table  mt-5 container">
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
                <td>{{$post['posted_by']}}</td>
                <td>{{$post['created_at']}}</td>
                <td class="col">
                    <a href={{route('posts.show',1)}} class="btn btn-info">View</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

