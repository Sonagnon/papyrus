<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';



   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'objet','date','reference','chemin','annee',
    ];



    public function annotations() 
	{
		return $this->hasMany('App\Annotation');
	}
}
