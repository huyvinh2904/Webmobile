<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;

class ItemController extends Controller
{
    public function getList(){
    	$Item = Item::all();
    	return view('admin.item.list',['Item'=>$Item]);
    }
    public function getAdd(){
    	return view('admin.item.add');
    }

      public function getEdit($id){
	$Item = Item::find($id);
    return view('admin.item.edit',['ItemEdit'=>$Item]);
    	
    }
    public function postEdit(Request $request,$id){
        $Item=Item::find($id);
         $this->validate($request,
            [
                'txtCateName'=>'required|min:3|max:15|unique:items,name'
            ],
            [
            'txtCateName.required'=>'Bạn chưa nhập Tên thể loại...',
            'txtCateName.min'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự',
            'txtCateName.max'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự',
            'txtCateName.unique'=>'Tên Menu Đã tồn tại...'


            ]
            );
            
        
        $Item->name = $request->txtCateName;  
        $Item->save();
        return redirect('admin/item/list')->with('thongbao','Sua Thành Công!');

    
        
    }
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'txtCateName'=>'required|min:3|max:15'
            ],
            [
            'txtCateName.required'=>'Bạn chưa nhập Tên thể loại...',
            'txtCateName.min'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự',
            'txtCateName.max'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự'


            ]
            );
        $Item = new Item;
        $Item->name = $request->txtCateName;
       
        $Item->save();
        return redirect('admin/item/list')->with('thongbao','Thêm Thành Công!');

    }
    public function getDel($id){
        $Item= Item::find($id);
        $Item->delete();
        return redirect('admin/item/list')->with('thongbao','Xoa Thành Công!');

    }
}
