<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function voiture(){
        return $this->belongsTo('App\Voiture');
    }
}
