@extends('layout')

@section('content')

<div class="title m-b-md">
Hello there amazing {!! $foo !!}! :D
</div>

<ul>
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
@endsection