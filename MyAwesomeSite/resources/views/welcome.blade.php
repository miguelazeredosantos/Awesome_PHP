@extends('layout')

@section('content')

<div class="title m-b-md">
    Hello there amazing Miguel! :D
</div>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li><?= $task; ?></li>
    <?php endforeach; ?>
</ul>
@endsection