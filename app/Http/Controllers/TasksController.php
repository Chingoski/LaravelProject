<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');//->only(['store']);
    }
    public function update(string $id){
        $task = Task::find($id);
        if(request()->has('status')){
            $task->complete();
        }else{
            $task->incomplete();
        }
        return back();
    }
    public function create(Project $project){
        $atributes = request()->validate([
            'description'=>['required']
        ]);
        $project->addTask(request('description'));
        return back();
    }
}
