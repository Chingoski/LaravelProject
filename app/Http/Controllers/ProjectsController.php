<?php

namespace App\Http\Controllers;

use App\test_project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = \App\test_project::all();
        return view('projects' , compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        $project = new test_project();
        $project->project_name = $request['project_name'];
        $project->description = $request['description'];
        $project->status = 0;
        $project->save();
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
    public function show(string $id, Request $r)
    {
        $project = test_project::find($id);
        return view('project',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $project = test_project::find($id);
        //dd($project);
        return view('edit' , compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $project = test_project::find($id);
        $project->project_name = $request['project_name'];
        $project->description = $request['description'];
        $project->status = $request['status'];
        $project->save();
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test_project  $test_project
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $result = \App\test_project::destroy($id);
        return redirect('/projects');
    }
}
