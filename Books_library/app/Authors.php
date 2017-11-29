<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
     protected $fillable = ['author_name', 'born_date','country','author_info','id'];

     public function books()
	    {
	    	return $this->hasMany('App\Books','author_id');
	    }

	     public function book()
    {
    	return $this->belongsTo('App\Books');
    }
}
