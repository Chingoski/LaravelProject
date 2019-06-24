@extends('partial_views/Layout')
@section('title' , 'Create')
@section('content')
    <div class="row">
        <div class="col col-sm-4 offset-4">
            <h1 class="display-4 text-center">Edit</h1>
            <form method="POST" action="/projects/{{$project->id}}">
                {{method_field('PATCH')}}
                {{csrf_field()}}
                <div class="form-group">
                    <input name="project_name" class="form-control {{$errors->has('project_name')? 'border border-danger' : ''}}" type="text" placeholder="Name" value="{{$project->project_name}}" required>
                </div>
                <div class="form-group">
                    <textarea name="description" type="text" class="form-control {{$errors->has('description')? 'border border-danger' : ''}}" placeholder="Description" required>{{$project->description}}</textarea>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="radio" value="0" id="defaultCheck1" @if($project->status==0) checked @endif>
                        <label class="form-check-label" for="defaultCheck1">
                           Unfinished<span class="badge">&#10006;</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="radio" value="1" id="defaultCheck2" @if($project->status==1) checked @endif>
                        <label class="form-check-label" for="defaultCheck2">
                            Finished <span class="badge">&#10004;</span>
                        </label>
                    </div>
                </div>
                @if($errors->any())
                    <div >
                        <ul class="list-group text-white rounded-pill" style="margin-bottom: 10px">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item bg-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button class="btn btn-primary" type="submit">Update</button>
                <form method="GET" action="/projects">
                    <button class="btn btn-primary" type="submit">Back</button>
                </form>
            </form>
            <form method="POST" action=/projects/{{$project->id}}">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
