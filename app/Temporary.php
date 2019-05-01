<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporary extends Model
{
    protected $table='Temporary';
    public  $timestamps=false;
    protected $fillable=['student_id'];

}
