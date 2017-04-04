<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table ="items";
    public function getCategory(){
    	return $this->hasMany('App\Category','item','id');
    }

    public function getProduct(){
    	return $this->hasManyThrough('App\Product','App\Category','item','category','id');
    }
}
