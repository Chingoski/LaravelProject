@extends('partial_views/Layout')
@section('title' , 'Create')
@section('content')
<div class="container" style="margin-top: 10px;">
    <div class="row">
    <div class="col col-md-4 offset-4">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">{{$project->project_name}}</h1>
                <p class="card-text">{{$project->description}}</p>

                @if($project->tasks->count())
                    <h1 class="display-4">Tasks:</h1>
                <ul class="list-group" style="margin-bottom: 10px">
                    @foreach($project->tasks as $task)
                        <li class="list-group-item">
                            @if($task->status)
                                <strike>{{$task->description}}</strike>
                            @else
                                {{$task->description}}
                            @endif
                        </li>
                    @endforeach
                </ul>
                @endif
                <a class="btn btn-primary text-white" href="/projects/{{$project->id}}/edit">Edit</a>
                <a class="btn btn-primary text-white" href="/projects">Back</a>
            </div>
            <div class="card-footer">
                <ul class="list-inline">
                    <li class="list-inline-item"> <p>Status:
                            @if($project->status)
                                <span>&#9745;</span>
                            @else
                                <span>&#9746;</span>
                            @endif
                        </p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
