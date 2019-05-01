<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
    'name','id','department','sex'

    ];
   protected $table='student';
   protected $keyType='string';
   public $timestamps=false;
   protected $primaryKey='id';

   public function Temporary(){
   	 return $this->hasone('App\Temporary');
   }
   
}
