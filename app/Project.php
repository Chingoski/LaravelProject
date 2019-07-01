<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
   protected $table = 'test_projects';
   protected $hidden = [
       'created_at' , 'updated_at'
   ];
   protected $attributes = [
       'status' => 0
   ];
   protected $fillable= [
       'project_name' , 'description' , 'status' , 'user_id'
   ];
   //protected $with = ['tasks'];
   public function tasks(){
       return $this->hasMany(Task::class);
   }
   public function addTask($description){
       $this->tasks()->create(['description'=>$description]);
   }
}
