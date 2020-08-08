<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	protected $guarded=[];
    public $timestamps=false;

    public function author(){
    	return $this->hasMany(Book::class);
    }
}
