<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //Table name
    protected $table='notifications';
    //Primary Key
    public $primarykey ='id';
    //timestamps
    public $timestamps=true;
}