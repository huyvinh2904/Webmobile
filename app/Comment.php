<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ="comments";
    public function getClient(){
    	return $this->belongsTo('App\Client','client','id');
    }
    public function getProduct(){
    	return $this->belongsTo('App\Product','product','id');
    }

}
