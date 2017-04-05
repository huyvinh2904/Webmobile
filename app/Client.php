<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table ="clients";
	
    public function getOrder(){
    	return $this->hasMany('App\Order','client','id');
    }
    public function getCountry(){
    	return $this->belongsTo('App\Country','country','id');
    }
    public function getComment(){
    	return $this->hasMany('App\Comment','client','id');
    }
}
