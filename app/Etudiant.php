<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function notes () 
    {
        return $this->hasMany('App\Note'); 
    }
    public function user(){
        return $this->belongsTo('App\User'); 
    } 
}
