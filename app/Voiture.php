<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
   public function Reservation(){
       return $this->hasMany('App\Reservation');
   }
}
