<?php

namespace App\Http\Controllers;

use App\test_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProjectsControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //GET localhost/api/projects
    public function index()
    {
        return \App\test_project::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //POST localhost/api/projects
    public function store(Request $request)
    {
        $project = new test_project();
        $project->project_name = $request['project_name'];
        $project->description = $request['description'];
        $project->status = 0;
        $project->save();
        return $project;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //GET localhost/api/projects/{id}
    public function show($id)
    {
        return \App\test_project::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request,string $id)
    {
        $project = test_project::find($id);
        $project->project_name = $request['project_name'];
        $project->description = $request['description'];
        $project->save();
        return $project;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = \App\test_project::destroy($id);
        return $result;
    }
}
