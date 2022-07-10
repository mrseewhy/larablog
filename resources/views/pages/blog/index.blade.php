@extends('layout.app')

@section('content')

<main role="main" style="margin-top:150px;">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Larablog</h1>
        <p>A simple blog design. Technology stack are bootstrap for the front end abd laravel at the backend. No front end framework used as this is just a test project. Although it is a basic CRUD project i am happy to have it on my github repo. Pls check it out and download. I am just trying to refresh by laravel skills </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
  
    <div class="container " style="margin-top:50px;">
      <!-- Example row of columns -->
      <div class="row">
        @if(count($posts) < 1)
        <h2>No post to display</h2>
        <p>Add some posts</p>
        @else
        @foreach($posts as $post)
        <div class="col-md-4">
          <h2>{{$post->title}}</h2>
          
          <p>{{$post->body}}</p>
          <p><a class="btn btn-secondary" href="/posts/{{$post->id}}" role="button">View details &raquo;</a></p>
        </div>
        @endforeach
        @endif
        
  
      <hr>
  
    </div> <!-- /container -->
  
  </main>
    
@endsection