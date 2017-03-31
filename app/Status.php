<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table ="statuses";
    public function getOrder(){
    	return $this->hasMany('App\Order','status','id');
    }
}
