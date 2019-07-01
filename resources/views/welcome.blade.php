@extends('layouts.app')


@section('content')
    <h1 class="display-3 text-center">Laravel home page</h1>

    <div class="row">
        <div class="col col-sm-4">
            <h1 class="display-3">Hello:{{$name}}</h1>
            <ul class="list-group">
                @foreach($tasks as $task)
                <li class="list-group-item">{{$task}}</li>
                    @endforeach
            </ul>
        </div>
    </div>

@endsection