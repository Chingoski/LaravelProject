<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $attributes = [
        'status' => false
    ];
    protected $fillable = [
        'description','status'
    ];
    protected $hidden= [
        'created_at' , 'updated_at'
    ];

    //protected $with = ['project'];

    public function project(){
        return $this->belongsTo(Project::class);
    }

}
