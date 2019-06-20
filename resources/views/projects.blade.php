@extends('partial_views/Layout')

@section('title' ,'Projects')

@section('content')

<div class="row">

    <div class="col col-sm-4">
        <h1 class="display-3 text-center">Projects</h1>
        <table class="table table-dark table-hover">
            <thead>
            <th>Name</th>
            <th>Description</th>
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
                    <td>{{$project->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
