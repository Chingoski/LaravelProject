<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{
   public function home(){
       $tasks = [
           'Task1',
           'Task2',
           'Task3'
       ];
       return view('welcome' , [
           'tasks'=>$tasks,
           'name' => request('name'),
       ] );
   }
    public function about(){return view('contact');}
    public function contact(){ return view('about');}
}
