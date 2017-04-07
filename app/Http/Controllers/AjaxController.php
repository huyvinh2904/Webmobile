<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use App\Category;
use App\Product;
use App\OrderItem;
use Session;
class AjaxController extends Controller
{
     public function getCategory($idMenu){
    	$Cate=Category::where('item',$idMenu)->get();
    	foreach ($Cate as $c) {
    		echo "<option value='".$c->id."'>".$c->name."</option>";
    	}
    }

      /*
      *  ADD Product to Category for Client when they add new product 
      *  Return array product
      */
      public function addCategory($id,$qty){
      //	echo
      		$product = Product::find($id);
      		$orderItem = new OrderItem();
      		$orderItem->product = $id;
      		$orderItem->price= $product->price_sale_off*$qty;
      		$orderItem->qty= $qty;
      		$name= "listProduct";
      	 

      		 if(!session($name)){
      			 $arr = array($orderItem);
                Session::set($name, $arr);
                 $value = Session::get($name); 
               //  var_dump(count($value));
      		}
      		else{
                 $value = Session::get($name); 
                 array_push($value, $orderItem);
                  Session::set($name, $value);
                //  var_dump(count($value));
      		}
  foreach ($value as $vl){
  	echo '<div class="media">';
    echo '<div class="media-left"><a href="#"><img src="admin_asset/catalogue/'.$vl->getProduct->image.'" alt="" class="img-responsive"></a></div>';
echo  '<div class="media-body">';
echo '<button type="button" class="remove-cart-item" >&times;</button>';
echo '<h4>'.$vl->getProduct->name.'</h4>'  ;
echo  '<div class="mini-cart-qty">'.$vl->qty.'</div>';
echo '<div class="mini-cart-price">'.$vl->price.'</div>';
echo   '</div>';
echo  '</div>';

  }


           
      }
}
