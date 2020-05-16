<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{

    //Table name
    protected $table = 'admin';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamp
    public $timestap = true;
}
