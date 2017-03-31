<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table ="items";
    public function getCategory(){
    	return $this->hasMany('App\Category','item','id');
    }
}
