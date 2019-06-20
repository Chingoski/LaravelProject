<?php

namespace App\Http\Controllers;

use App\test_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class projects extends Controller
{
    public function index(){
        $projects = \App\test_project::all();
        return view('projects' , compact('projects'));
    }
}
