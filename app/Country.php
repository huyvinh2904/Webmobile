<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table ="countries";
    public function getClient(){
    	return $this->hasMany('App\Client','country','id');
    }
}
