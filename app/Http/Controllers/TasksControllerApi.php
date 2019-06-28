<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksControllerApi extends Controller
{
    public function index()
    {
        return Task::paginate(15);
    }
    public function create()
    {
        //
    }
    public function store()
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
