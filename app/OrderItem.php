<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table ="orders_items";
    public function getOrder(){
    	return $this->belongsTo('App\Order','order','id');
    }
    public function getProduct(){
    	return $this->belongsTo('App\Product','product','id');
    }
}
