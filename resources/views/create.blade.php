@extends('partial_views/Layout')
@section('title' , 'Create')
@section('content')
<div class="row">
    <div class="col col-sm-4 offset-4">
        <h1 class="display-4 text-center">Create a project</h1>
        <form method="POST" action="/projects">
            {{csrf_field()}}
            <div class="form-group">
                <input name="project_name" class="form-control" type="text" placeholder="Name" >
            </div>
            <div class="form-group">
                <textarea name="description" type="text" class="form-control" placeholder="Description" ></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Create</button>
        </form>
    </div>
</div>
@endsection
