<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table='posts';
    //Primary Key
    public $primarykey ='id';
    //timestamps
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function department(){
        return $this->belongsTo('App\Department','dept_id','id');
    }
    public function facaulty(){
        return $this->belongsTo('App\Fuculty','fuculty_id','id');
    }
}