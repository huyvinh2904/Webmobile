<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


use Cookie;
use Session;
use App\Item;
use App\Category;
use App\Product;
use App\OrderItem;
class PageController extends Controller
{
    //
    /*
    *  call index View
    */
     function __construct(){
     	$item_share = Item::all();
     	view()->share('item_share',$item_share);
	
     }
    public function getIndex(){

    	return view('page.trangchu');

    }

    public function getListByItem($id){
    	$item = Item::find($id);
    	$product = $item->getProduct()->paginate(12);
    	 return view('page.list_all',['item'=>$item,'product'=>$product]);
    }

    public function getListByCategory($id){
    	$category = Category::find($id);
    	$product = $category->getProduct()->paginate(12);
    	return view('page.list',['category'=>$category,'product'=>$product]);
    }

    public function getDetail($id){
    	$product = Product::find($id);
    	return view('page.detail',['product'=>$product]);
    }

    public function setSession(){
         $item1 = Item::find(1);
         $item2 = Item::find(2);
         $arr = array($item1,$item2);

       // $arr = ['1'=>'dong','2'=>'tuan','3'=>'nam'];
       $name = "coo" ;
        Session::set($name, $arr);
          $value = Session::get($name); 
          echo"<pre>";

          var_dump($value);
        //  $request->session()->flush();
        // return view('page.test_cookie');
        // echo "h";
    }
    
    public function getSession(){
       
         if(!session('coo'))
         {
            echo"ko ton tai";
         }
         else{
              $item3 = Item::find(3);
             $value = Session::get('coo'); 
             array_push($value, $item3);
             echo"<pre>";
             var_dump($value[1]->name);
         }
        
    
       //    var_dump($orderItem);
    }

    
}
