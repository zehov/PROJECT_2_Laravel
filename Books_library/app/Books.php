<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['book_name', 'total_pages', 'book_info', 'book_link', 'author_id','id'];

    public function author()
    {
    	return $this->belongsTo('App\Authors');
    }

	 public function read(){
        return $this->hasMany('App\Read', 'book_id');
    }

}
