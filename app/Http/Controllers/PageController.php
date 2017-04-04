<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use Cookie;
use App\Http\Requests;
use App\Item;
use App\Category;
use App\Product;


use DB;

use Illuminate\Support\Facades\Auth;





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

    public function getCookie(){
        $arr = ['1'=>'dong','2'=>'tuan','3'=>'nam'];
        $name = "coo" ;
        Cookie::queue($name, $arr, 10000);

          $value = Cookie::get($name); 
          
          var_dump($value);
        // return view('page.test_cookie');
        // echo "h";

    }
    

    
}
