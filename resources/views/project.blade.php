@extends('partial_views/Layout')
@section('title' , 'Create')
@section('content')
    <div class="row">
        <div class="col col-sm-4">
            <div class="card">

                <div class="card-body">
                    <h1 class="card-title text-center">{{$project->project_name}}</h1>
                    <p class="card-text">{{$project->description}}</p>
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
@endsection
