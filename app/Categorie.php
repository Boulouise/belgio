<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function Voitures(){
        return $this->hasMany('App\Voiture');
    }
}
