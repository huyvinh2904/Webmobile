<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\OrderItem;
use App\Order;
class OrderItemController extends Controller
{
    //

    /*
    * return List order items by order_id
    */
    public function getList($id){
    	$orderItem= OrderItem::where('order_id',$id)->paginate(10);
    	$order = Order::find($id);
    	return view('admin.order_item.list',['orderItem'=>$orderItem,'order'=>$order]);
    }

    /*
    * delete a orderItem  by ID
    */
    public function getDelete($id,$order_id){
    	// echo $id ;
    	// echo $order_id;
    	$orderItem= OrderItem::find($id);
    	$orderItem->delete();
    	return redirect('admin/order_item/list/'.$order_id)->with('message','Deleted');
    }


}
