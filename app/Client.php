<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Client as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Client extends Authenticatable
{
	
    public function getOrder(){
    	return $this->hasMany('App\Order','client','id');
    }
    public function getCourntry(){
    	return $this->belongsTo('App\Country','country','id');
    }
    public function getComment(){
    	return $this->hasMany('App\Comment','client','id');
    }
}
