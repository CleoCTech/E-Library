<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Fuculty extends Model
{

    use Notifiable;

    
    protected $table= 'fuculties';

    public function posts(){
        return $this->hasMany('App\Post','id','fuculty_id');
    }
}