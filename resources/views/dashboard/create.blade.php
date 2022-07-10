@extends('dashboard.index');

@section('dashboard-content')

<h2>Create new blog post</h2>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{old('title')}}">
    </div>
    <p>@error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror</p>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name='body' rows="3" placeholder="Blog Body">{{old('body')}}</textarea>
    </div><p>
    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </p>
    <button type="submit" class="btn btn-primary btn-block btn-sm">Save A Blogpost</button>
  </form>
    
@endsection

