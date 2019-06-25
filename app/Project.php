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
   //protected $with = ['tasks'];
   public function tasks(){
       return $this->hasMany(Task::class);
   }
}
