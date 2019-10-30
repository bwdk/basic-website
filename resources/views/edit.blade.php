@extends('layout.app')

@section('content')
    <a href ="/todos" class="btn btn-secondary mt-2">Go Back</a>
   <h1>Edit Todo</h1>
<form method="post" action="/todo/{{ $todo->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          
        <label for="title">Title</label>
        <input type="text" id="title" name='title' class="form-control" placeholder="Enter title" value="{{ $todo->title }}">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input type="text" class="form-control" id="content" name='content' placeholder="Enter Content" value="{{ $todo->content }}">
        </div>
        <div class="form-group">
        <label for="due">Due</label>
          <input type="text" class="form-control" id="due" name='due' placeholder="Enter Due" value="{{ $todo->due }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    


@endsection