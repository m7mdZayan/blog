@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-secondary text-light mb-2">
        Post Details
    </div>
    <div class="card-body bg-dark text-light">
        <h5 class="card-title">{{$post['title']}}</h5>
        <p class="card-text">{{$post['description']}}</p>

        <a href={{route('posts.index')}}>  <button type="submit" class="btn btn-primary mt-3"> Delete </button></a>
    </div>
</div>
@endsection
