@extends('layout.app')

@section('content')
    <a href ="/todos" class="btn btn-secondary mt-2">Go Back</a>
    <h1>{{ $todo->title }}</h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>

<a href ="/todo/{{ $todo->id }}/edit" class="btn btn-primary mt-2 ">Edit</a>

<form method="post" action="/todo/{{ $todo->id }}">
    @csrf
    @method('DELETE')
<button type="submit" class="btn btn-danger mt-2 float_right">Delete</button>
</form>

@endsection