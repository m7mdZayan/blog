@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-secondary text-light mb-2">
        Post Details
    </div>
    <div class="card-body bg-dark text-light">
        <h5 class="card-title">{{$post['title']}}</h5>
        <p class="card-text">{{$post['description']}}</p>
        <strong class="d-block"> Are You sure u want to delete ? </strong>

        <a href={{route('posts.destroy',$post['id'])}}>  <button class="btn btn-primary mt-3"> Yes </button></a>
        <a href={{route('posts.index')}}>  <button class="btn btn-secondary mt-3"> No </button></a>
    </div>
</div>
@endsection
