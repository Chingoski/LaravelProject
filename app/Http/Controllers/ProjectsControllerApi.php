<?php

namespace App\Http\Controllers;

use App\Project;
use App\test_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class ProjectsControllerApi extends Controller
{
    //GET localhost/api/projects
    public function index()
    {
        //DB::enableQueryLog();
        //dd(DB::getQueryLog());
        return $this->getResponseData(Response::HTTP_OK , 'Success' , Project::with('tasks')->paginate() );
    }

    public function create()
    {

    }

    //POST localhost/api/projects
    public function store()
    {
        $atributes = request()->validate([
            'project_name' => ['required' ,'min:3' , 'max:100'],
            'description' => ['required' , 'min:10', 'max:255'],
            'status' => ['required']
        ]);
        return Project::create($atributes);
    }

    //GET localhost/api/projects/{id}
    public function show(Project $project)
    {
        return $project;
    }

    public function edit($id)
    {

    }

    public function update(Project $project)
    {
        $atributes = request()->validate([
            'project_name' => ['required' ,'min:3' , 'max:100'],
            'description' => ['required' , 'min:10', 'max:255'],
        ]);
        $project->update($atributes);
        return $project ;
    }
    public function destroy(Project $project)
    {
        $result = $project->delete();
        return (string)$result;
    }
}
