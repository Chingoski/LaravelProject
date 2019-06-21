<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesControler@home');
Route::get('/contact', 'PagesControler@contact');
Route::get('/about' ,'PagesControler@about');


Route::resource('projects', 'ProjectsController');

//Route::get('/projects' , 'projects@index'); //show all projects
//Route::get('/projects/create','projects@create');//open form for creating db entity
//Route::get('/projects/{id}','projects@show'); //show one project
//Route::post('/projects','projects@store');//save the newly created entity in dv
//Route::get('projects/{project}/edit','projects@edit');//open form for editing an entity
//Route::put('/projects/{project}','projects@update');//save changes after editing
//Route::delete('/projects/{project}','projects@delete');//delete entity