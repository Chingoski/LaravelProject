<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test_project extends Model
{
    protected $hidden= [
        'status' , 'created_at' , 'updated_at'
    ];
}
