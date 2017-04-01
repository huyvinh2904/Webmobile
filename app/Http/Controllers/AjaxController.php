<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use App\Category;
use App\Product;

class AjaxController extends Controller
{
     public function getCategory($idMenu){
    	$Cate=Category::where('item',$idMenu)->get();
    	foreach ($Cate as $c) {
    		echo "<option value='".$c->id."'>".$c->name."</option>";
    	}

    }
}
