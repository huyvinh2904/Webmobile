<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Item;

class CategoryController extends Controller
{
     /**
     * Get view list of categories
     *
     * @param  $Cate
     */
     public function getList(){
         
         $Cate = Category::all();
         return view('admin.category.list',['Cate' => $Cate]);
         
     }
     /**
     * Get view categories add form.
     *
     * @param  $Item
     */
     public function getAdd(){
       $Item = Item::all();
       return view('admin.category.add',['Item' => $Item]);
   }
     /**
     * Post add form add categories.
     *
     * @param  $request $Cate
     */
     public function postAdd(Request $request){
        $this->validate($request,
            [
            'txtCateName'=>'required|min:3|max:15',
            'theloai'=>'required'
            ],
            [
            'txtCateName.required'=>'Bạn chưa nhập Tên loai tin...',
            'txtCateName.min'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự',
            'txtCateName.max'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự',
            'theloai'=>'Bạn chưa chọn Thể loại'


            ]
            );
        $Cate = new Category;
        $Cate->name = $request->txtCateName;
        $Cate->item =$request->theloai;
        
        $Cate->save();
        return redirect('admin/cate/list')->with('thongbao','Thêm Thành Công!');

    }
     /**
     * Get a form categories edit.
     *
     * @param  $id
     */

     public function getEdit($id){
       $Item = Item::all();
       $Cate = Category::find($id);
       return view('admin.category.edit',['CateEdit'=>$Cate,'Item'=>$Item]);
       
         /**
     * Post Categories form edit.
     *
     * @param  $request $id
     */
     }
     public function postEdit(Request $request,$id){
        
       $this->validate($request,
        [
        'txtCateName'=>'required|min:3|max:15|unique:items,name',
        'theloai1'=>'required'
        ],
        [
        'txtCateName.required'=>'Bạn chưa nhập Tên thể loại...',
        'txtCateName.min'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự',
        'txtCateName.max'=>'Tên thể loại phải có độ dài từ 3 đến 15 ký tự',
        'txtCateName.unique'=>'Tên thể loại đã tồn tại',
        'theloai1.required'=>'Bạn chưa chọn Menu'


        ]
        );
       
       $Cate = Category::find($id);
       $Cate->name = $request->txtCateName;
       $Cate->item= $request->theloai1;
       $Cate->save();
       return redirect('admin/cate/edit/'.$id)->with('thongbao','Sua Thành Công!');

       
       
   }
     /**
     * Delete a record of table categories.
     *
     * @param  $id
     */
     public function getDel($id){
        $Cate = Category::find($id);
        $Cate->delete();
        return redirect('admin/cate/list')->with('thongbao','Xoa Thành Công!');

    }
}
