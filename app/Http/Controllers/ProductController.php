<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DateTime,Auth,File;
use App\Item;
use App\Category;
use App\Product;

use App\Http\Requests;

class ProductController extends Controller
{
    public function getList(){
		$product = Product::orderBy('id','DESC')->get();
  
    	return view('admin.product.list',['product' => $product]);
    	
    }
   
    public function getEdit($id){
	$Item     = Item::all();
	$Category = Category::all();
	$product  = Product::find($id);
	return view('admin.product.edit',['product' => $product,'Category'=>$Category,'Item'=>$Item]);
    	
    }
    public function postEdit(Request $request,$id){
    	$product =Product::find($id);
    	$this->validate($request,
    		[
            'menu'     =>'required',
            'category' =>'required',
            'name'     =>'required|min:3|max:30|unique:products,name',
            'descrip'  =>'required'
            
            
            
            ]
            ,
            [
            'menu.required'     =>'Bạn chưa chọn Menu.',
            'category.required' =>'Bạn chưa chọn Category.',
            'name.required'     =>'Bạn chưa nhập Product',
            'name.min'          =>'Product ít nhất là 3 ký tự.',
            'name.max'          =>'Product nhiều nhất là 30 ký tự.',
            'name.unique'       =>'Product đã tồn tại.',
            'descrip.required'  =>'Bạn chưa nhập mo ta'
          

    		]);
        $product->category       = $request->category;
        $product->name           = $request->name;
        $product->description    = $request->descrip;
        $product->price          = $request->price;
        $product->price_sale_off = $request->price_sale_off;
    	if ($request->hasFile('image')) {
                $file =$request->file('image');
                $duoi =$file->getClientOriginalExtension();
                if ($duoi !='png' && $duoi!= 'jpg') {
                return redirect('admin/product/add')->with('loi','Bạn chỉ được thêm ảnh có đuôi png, jpg');

    		}
                $name           =$file->getClientOriginalName();
                $image          =str_random(4)."_".$name;
                while (file_exists("admin_asset/catalogue".$image)) {
                $image          =str_radom(4)."_".$name;
                }
                $file->	move('admin_asset/catalogue',$image);
                unlink("admin_asset/catalogue/".$product->image);
                $product->image =$image;
    	}
    	
    	$product->save();
    	return redirect('admin/product/list')->with('thongbao','Sua thanh cong');

    }
   
     public function getDel($id){
        $product =Product::find($id);
        if (file_exists('admin_asset/catalogue/'.$product->image)) {
        File::delete('admin_asset/catalogue/'.$product->image);
    }
        
        $product->delete();
        return redirect('admin/product/list')->with('thongbao','Delete Susses!');

    }
    public function getAdd(){
    	$Item= Item::all();
    	$Cate = Category::all();
    	return view('admin.product.add',['Item'=>$Item,'Cate'=>$Cate]);

    }
    public function postAdd(Request $request){
    	$this->validate($request,
            [
            'menu'                    =>'required',
            'category'                =>'required',
            'name'                    =>'required|min:3|max:30|unique:products,name',
            'price'                   =>'required',
            'price_sale_off'          =>'required',
            'ishot'          =>'required'
            ]
            ,
            [
            'menu.required'           =>'Bạn chưa chọn Menu.',
            'category.required'       =>'Bạn chưa chọn Category.',
            'name.required'           =>'Bạn chưa nhập Product',
            'price.required'          =>'Bạn chưa nhập Price',
            'price_sale_off.required' =>'Bạn chưa nhập Price sale',
            'name.min'                =>'Product ít nhất là 3 ký tự.',
            'name.max'                =>'Product nhiều nhất là 30 ký tự.',
            'name.unique'             =>'Product đã tồn tại.',
            'descrip.required'        =>'Bạn chưa nhập mo ta',
            'ishot.required'          =>' Bạn chưa chọn trạng thái'
          

            ]);
        $product                 = new Product;
        $product->category       = $request->category;
        $product->name           = $request->name;
        $product->description    = $request->descrip;
        $product->price          = $request->price;
        $product->price_sale_off = $request->price_sale_off;
        $product->ishot = $request->ishot;
        if ($request->hasFile('image')) {
    		$file =$request->file('image');
    		$duoi=$file->getClientOriginalExtension();
    		if ($duoi !='png' && $duoi!= 'jpg') {
    			return redirect('admin/product/add')->with('loi','Bạn chỉ được thêm ảnh có đuôi png, jpg');

    		}
    		$name =$file->getClientOriginalName();
    		$image =str_random(4)."_".$name;
    		while (file_exists("admin_asset/catalogue/".$image)) {
    			$image =str_random(4)."_".$name;
    		}
    		$file->	move('admin_asset/catalogue',$image);
    		$product->image=$image;
    	}
    	else{
    		$product->image = "";

    	}
    	$product->save();
    	return redirect('admin/product/list')->with('thongbao','Bạn đã thêm Product thành công!');

    }
}
