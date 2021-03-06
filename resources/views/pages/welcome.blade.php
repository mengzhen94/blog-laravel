@extends('main')

@section('title', '| Homepage')

@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="{{ route('blog.single', 'image')}}" role="button">Popular Post</a></p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8">

          @foreach($posts as $post)
            <div class="post">
              <h3>{{$post->title}}</h3>
              <p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : '' }}</p>
              <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
            </div>
            <hr>
          @endforeach

        </div>

        <div class="col-md-4">
          <h2>To See All Features!</h2>
          <h2>Login</h2>
          <p>Email:gao.mengzhen94@gmail.com<p>
          <p>Password:1234567</p>
        </div>
      </div>

@endsection