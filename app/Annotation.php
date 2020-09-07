<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
	protected $table = 'annotations';



   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contenu','date','document_id','user_id',
    ];

   public function documents() 
	{
		return $this->belongsTo('App\Document');
	}

	public function users() 
	{
		return $this->belongsTo('App\User');
	}
}
