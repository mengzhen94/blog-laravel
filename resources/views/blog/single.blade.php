@extends('main')

@section('title', "| $post->title")
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</h1>
            <hr>
            <p><strong>Posted In:</strong> {{ $post->category->name}}</p>
        </div>
    </div>
@stop
