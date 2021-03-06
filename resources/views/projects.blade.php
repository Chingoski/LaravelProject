@extends('layouts.app')

@section('title' ,'Projects')

@section('content')

<div class="row" style="margin-top: 10px;">

    <div class="col col-md-4 offset-4">
        @if(auth()->check())
            <h1 class="display-3 text-center">Projects</h1>
        <table class="table table-dark table-hover">
            <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
            </thead>
            <tbody>

            @foreach($projects as $project)
                <tr>
                    <td>@if($project->status)
                            <strike> {{$project->project_name}}</strike>
                        @else
                            {{$project->project_name}}
                        @endif
                    </td>
                    <td>
                        @if(strlen($project->description)>25)
                            {{substr($project->description,0 , 22)}}...
                            @else
                            {{$project->description}}
                            @endif
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="btn btn-primary text-white" href="/projects/{{$project->id}}">Details</a></li>
                            <li class="list-inline-item"><a class="btn btn-primary text-white" href="/projects/{{$project->id}}/edit">Edit</a></li>
                            <li class="list-inline-item">
                                <form method="POST" action=/projects/{{$project->id}}">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button class="btn btn-primary" type="submit">Delete</button>
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$projects->links()}}
            <form method="GET" action="/projects/create">
                {{csrf_field()}}
                <button class="btn btn-primary" type="submit">Add new task</button>
            </form>
        @else
            <h1 class="display-3 text-center">Sign in to view your projects</h1>
        @endif
    </div>
</div>

@endsection
