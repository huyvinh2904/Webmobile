<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\OrderItem;
use App\status;
class OrderController extends Controller
{
    //
    public function getList(){
    	$this->_updateOrder();
    	$order = Order::orderBy('id', 'DESC')->paginate(10);
     //   Post::orderBy('id', 'DESC')->get();
    	//$orderItem = OrderItem::all();
    	return view('admin.order.list',['order'=>$order]);
    }
     public function getTest(){
    	// $order = Order::paginate(10);
    	return view('admin.order.add');
    }

     public function getDelete($id){
       $order = Order::find($id);
       $order->delete();
          return redirect('admin/order/list')->with('message','Deleted');
     }

     public function postDeleteMany(Request $request){
     	$arr = $request->order_check;
     	$order = Order::whereIn('id',$arr)->delete();
     	 return redirect('admin/order/list')->with('message','Deleted');
     	
     }

     public function getEdit($id){
            $order = Order::find($id);
            $status = Status::all();
           return view('admin.order.edit',['order'=>$order, 'status'=> $status] );
     }

     public function postEdit(Request $request,$id){
            $order = Order::find($id);
           // echo $request->status ."va ". $request->payment_status;
            $order->payment_status= $request->payment_status;
            $order->status= $request->status;
            $order->notes= $request->txtNote;
            $order->save();
           return redirect('admin/order/edit/'.$id)->with('message','Edited');
     }
    /*
    *  update total data in Order
    */
    private function _updateOrder(){
    	 $order =Order::all();
    	 $orderItem = OrderItem::all();
    	 foreach ($order as $od) {
    	 	$total=0;
    	 	# code...
    	 	foreach($orderItem as $od_item){
    	 		if($od_item->order_id==$od->id){
    	 			 $total= $total + ($od_item->price );
    	 		}
    	 	}

    	 	$od->total =$total;
    	 	$od->save();
    	 }
    }
}
