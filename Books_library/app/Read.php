<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Read extends Model
{
    protected $fillable = [
        'user_id', 'book_id', 'read_pages'
    ];


 public function read(){
    	return $this->belongsTo('App\User','user_id', 'id');
    }
    public function book(){
        return $this->belongsTo('App\Books','book_id', 'id');
    }
	    

}



