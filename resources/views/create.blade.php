@extends('partial_views/Layout')
@section('title' , 'Create')
@section('content')
<div class="row" style="margin-top: 10px;">
    <div class="col col-sm-4 offset-4">
        <h1 class="display-4 text-center">Create a project</h1>
        <form method="POST" action="/projects">
            {{csrf_field()}}
            <div class="form-group">
                <input name="project_name" class="form-control {{$errors->has('project_name')? 'border border-danger' : ''}}" type="text" placeholder="Name" required value="{{old('project_name')}}">
                <input name="status" class="form-control" type="hidden" value="0" >
            </div>
            <div class="form-group">
                <textarea name="description" type="text" class="form-control {{$errors->has('description')? 'border border-danger' : ''}}" placeholder="Description" required >{{old('description')}}</textarea>
            </div>
            @if($errors->any())
                <div>
                    <ul class="list-group text-white rounded-pill" style="margin-bottom: 10px">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item bg-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button class="btn btn-primary" type="submit">Create</button>

        </form>
    </div>
</div>
@endsection
