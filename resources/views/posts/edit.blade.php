@extends('layouts.app')

@section('content')
    <form method="post" action={{route('posts.update',$post['id'])}}>
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label mx-5">Title</label>
            <input type="text" class="form-control w-25 " id="title" name="title" value={{$post['title']}} aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label mx-5" >Description</label>
            <textarea class="form-control w-50" name="description">{{$post['description']}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>

@endsection
