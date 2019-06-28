<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
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
    public function complete($status = true){
        $this->update(['status'=>$status]);
    }
    public function incomplete(){
        $this->complete(false);
    }

}
