<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{

    //Table name
    protected $table = 'places';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamp
    public $timestap = true;
}
