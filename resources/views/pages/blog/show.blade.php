@extends('layout.app')

@section('content')

<main role="main" style="margin-top:150px;">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">{{$post->title}}</h1>
        <p>{{$post->body}} </p>
        <p><small><small>{{$post->updated_at}}</small></small></p>
        <p><a class="btn btn-primary btn-lg" href="/posts" role="button">Go back to all posts &raquo;</a></p>
      </div>
    </div>
        
  
      <hr>
  
    </div> <!-- /container -->
  
  </main>
    
@endsection

