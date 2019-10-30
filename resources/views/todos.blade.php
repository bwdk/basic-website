@extends('layout.app')

@section('content')

<h1>Todos</h1>

@if (count($todos) > 0) 
    @foreach ($todos as $todo)
<h2><a href="todo/{{ $todo->id }}">{{ $todo->title }}</a></h2>
<div class="card m-2">
    <h3>{{ $todo->content }}</h3>
    <span class="badge badge-danger">{{ $todo->due }}</span> 
</div>

    @endforeach
@endif

<button type="button" class="btn btn-outline-primary"><a href ="todo/create">Create</a></button>


@endsection