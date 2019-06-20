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
Route::get('/projects' , 'projects@index');
