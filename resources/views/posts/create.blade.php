@extends('layouts.app')

@section('content')
    <form method="GET" action={{route('posts.store')}}>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label mx-5">Title</label>
            <input type="text" class="form-control w-25" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label mx-5">Description</label>
            <textarea name="description" class="form-control w-50"></textarea>
        </div>

        <div class="mb-3">
            <label for="post_creator" class="form-label">Post Creator</label>
            <select class="form-control w-25" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>

@endsection
