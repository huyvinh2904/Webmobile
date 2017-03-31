<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
    public function getOrderItem(){
    	return $this->hasMany('App\OrderItem','product','id');
    }
    public function getCategory(){
    	return $this->belongsTo('App\Category','category','id');
    }
    public function getComment(){
    	return $this->hasMany('App\Comment','product','id');
    }
}
