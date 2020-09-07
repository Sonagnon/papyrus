<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    protected $table = 'fonctions';



   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'nom', 'ordre', 
    ];


    
   
}
