@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-secondary text-light mb-2">
            Post Details
        </div>
        <div class="card-body bg-dark text-light">
            <h5 class="card-title">{{$post['title']}}</h5>
            <p class="card-text">{{$post['description']}}</p>
        </div>
    </div>
@endsection
