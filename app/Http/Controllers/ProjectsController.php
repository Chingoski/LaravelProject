<?php

namespace App\Http\Controllers;

use App\Project;
use App\test_project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //GET localhost/projects
    public function index()
    {
        $projects = Project::all();
        return view('projects' , compact('projects'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //GET localhost/projects/create
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //POST localhost/projects
    public function store()
    {
       $atributes =  request()->validate([
            'project_name' => ['required' ,'min:3' , 'max:100'],
            'description' => ['required' , 'min:10', 'max:255'],
            'status'=>['required']
        ]);
        Project::create($atributes);
        return redirect('/projects');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
    //GET localhost/projects/{id}
    public function show(Project $project)
    {
        return view('project',compact('project'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
    //GET localhost/projects/{id}/edit
    public function edit(Project $project)
    {
        return view('edit' , compact('project'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
    //DELETE localhost/project/{id}
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
