@extends('layout.app')

@section('content')

<main role="main" style="margin-top:80px;">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">{{$post->title}}</h1>
        <p>{{$post->body}} </p>
        <p><small><small>{{$post->updated_at}}</small></small></p>
        <p><a class="btn btn-primary btn-lg" href="/posts" role="button">Go back to all posts &raquo;</a></p>
        <p><a class="btn btn-warning btn-sm" href="{{route('posts.edit', ['post' => $post->id])}}" role="button"> Edit Post&raquo;</a></p>
        <p>
            <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">Delete post</button>
            </form>
        </p>
      </div>
    </div>
        
  
      <hr>
  
    </div> <!-- /container -->
  
  </main>
    
@endsection

