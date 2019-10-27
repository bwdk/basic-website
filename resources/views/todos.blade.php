@extends('layout.app')

@section('content')

<h1>Todos</h1>

@if (count($todos) > 0) 
    @foreach ($todos as $todo)
<h2>{{ $todo->title }}</h2>
<div class="card">
    <h3>{{ $todo->content }}</h3>
    <span class="label label-danger">{{ $todo->due }}</span> 
</div>
    @endforeach
@endif

@endsection