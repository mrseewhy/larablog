@extends('dashboard.index');

@section('dashboard-content')

<h2>Edit blog post with title - {{$post->title}}</h2>
<form action="{{route('posts.update', ['post' => $post->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{$post->title}}">
    </div>
    <p>@error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror</p>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name='body' rows="3" placeholder="Blog Body">{{$post->body}}</textarea>
    </div><p>
    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </p>
    <button type="submit" class="btn btn-primary btn-block btn-sm">Edit A Blogpost</button>
  </form>
    
@endsection

