<?php

namespace App\Http\Controllers;

use App\Project;
use App\test_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//->only(['store']);
    }

    //GET localhost/projects
    public function index()
    {
        $projects =Project::where('user_id' , auth()->id())->paginate(10);
        return view('projects' , compact('projects'));
    }

    //GET localhost/projects/create
    public function create()
    {

        return view('create');
    }

    //POST localhost/projects
    public function store()
    {
       $atributes =  request()->validate([
            'project_name' => ['required' ,'min:3' , 'max:100'],
            'user_id'=>['required ' , 'integer'],
            'description' => ['required' , 'min:10', 'max:255'],
            'status'=>['required']
        ]);
//       dd($atributes);
        Project::create($atributes);
        return redirect('/projects');
    }
    //GET localhost/projects/{id}
    public function show(Project $project)
    {
        return view('project',compact('project'));
    }

    //GET localhost/projects/{id}/edit
    public function edit(Project $project)
    {
        return view('edit' , compact('project'));
    }
    //PATCH localhost/projects/{id}
    public function update(Project $project)
    {
        $atributes = request()->validate([
            'project_name' => ['required' ,'min:3' , 'max:100'],
            'description' => ['required' , 'min:10', 'max:255'],
            'status' => ['required']
        ]);
        $project->update($atributes);
        return redirect('/projects');
    }
    //DELETE localhost/project/{id}
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
