<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Department extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fuculty_id', 'dept_name'
    ];
    protected $table= 'departments';

    public function posts(){
        return $this->hasMany('App\Post','id','dept_id');
    }
}