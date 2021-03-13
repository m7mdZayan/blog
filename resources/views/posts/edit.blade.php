@extends('layouts.app')

@section('content')
    <form method="GET" action={{route('posts.index')}}>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label mx-5">Title</label>
            <input type="text" class="form-control w-25 " id="title" value={{$post['title']}} aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label mx-5" >Description</label>
            <textarea class="form-control w-50">{{$post['description']}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Edit</button>
    </form>

@endsection
