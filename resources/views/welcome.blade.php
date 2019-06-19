@extends('partial_views.Layout')


@section('content')
    <h1 class="display-3 text-center">Laravel home page</h1>
    <?php foreach ($tasks as $task):?>
    <ul class="list-group">
        <li class="list-group-item"><?= $task ?></li>
    </ul>
    <?php endforeach; ?>
@endsection