<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ="orders";
    public function getOrderItem(){
    	return $this->hasMany('App\OrderItem','order','id');
    }
    public function getStatus(){
    	return $this->belongsTo('App\Status','status','id');
    }
    public function getClient(){
    	return $this->belongsTo('App\Client','client','id');
    }
}
