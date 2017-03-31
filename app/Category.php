<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ="categories";
    public function getItem(){
    	return $this->belongsTo('App\Item','item','id');
    }
    public function getProduct(){
    	return $this->hasMany('App\Product','category','id');
    }
}
