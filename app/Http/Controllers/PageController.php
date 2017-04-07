

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App\Http\Requests;
use App\Item;
use App\Category;
use App\Product;
use App\Order;
use App\Client;
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
         // $this->middleware('clients',['except'=>'getLogout']);
	
     }
     public function getLogout(){
        Auth::guard('clients')->logout();
        return redirect('login');

     }
    
    public function getIndex1(){

        
       return view('page.trangchu');



    }
    public function getAccount($id){
        $infos = Client::find($id);
        return view('page.myaccount',['infos'=>$infos]);
    }
    public function Edit($id){
        $Edtinfos = Client::find($id);
        return view('page.EditUser',['Edtinfos'=>$Edtinfos]);

    }
    public function postEdit(Request $request,$id){
        $postinfos = Client::find($id);
        
         $this->validate($request,
            [
                'name'=>'required|min:3|max:15',
                'lastname'=>'required',
                'phone'=>'required',
                'country'=>'required'
            ],
            [
            'name.required'=>'Name is required.',
            'name.min'=>'Name is Ivaild.',
            'name.max'=>'Name is Ivaild.',
            'lastname.unique'=>'LastName is required.',
            'phone.required'=>'Phone is required.',
            'country.required'=> 'Country is Ivaild.'
            ]
            );
            
        
        $postinfos->first_name = $request->name;
        $postinfos->last_name= $request->lastname;
        $postinfos->phone_number = $request->phone;
        $postinfos->country = $request->country;
        $postinfos->save();
        return redirect('myaccount/'.$id)->with('thongbao','Susses.');

    
        
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
    
     public function getLienhe(){
     	return view('page.lienhe');
     }
     public function getGioithieu(){
     	return view('page.gioithieu');
     }
     public function getMyorder($id){
        $getOrder = Order::where('client',$id)->get();
        if($getOrder){
            return view('page.myorder',['getOrder'=>$getOrder]);

        }
        else
        {
            return "Bạn chưa đặt hàng sản phẩm nào !";
        }


        
     }
    
}
