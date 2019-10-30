@extends('layout.app')

@section('content')
    <h1>Create new Todo</h1>
    <a href ="/todos" class="btn btn-secondary mt-2">Go Back</a>
<form method="post" action="/todo">
    @csrf
    <div class="form-group">
      
    <label for="title">Title</label>
    <input type="text" id="title" name='title' class="form-control" placeholder="Enter title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" class="form-control" id="content" name='content' placeholder="Enter Content" value="{{ old('content') }}">
    </div>
    <div class="form-group">
    <label for="due">Due</label>
      <input type="text" class="form-control" id="due" name='due' placeholder="Enter Due" value="{{ old('due') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection