<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $table = 'test_projects';
   protected $hidden = [
       'created_at' , 'updated_at'
   ];
   protected $fillable= [
       'project_name' , 'description' , 'status'
   ];
}
