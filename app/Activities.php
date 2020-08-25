<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    //Table name
    protected $table='activities';
    //Primary Key
    public $primarykey ='id';
    //timestamps
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}