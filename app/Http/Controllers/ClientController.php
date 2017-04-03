<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;
class ClientController extends Controller
{
    //
     public function getList(){
     	 $client =  Client::paginate(10);
         return View('admin.client.list',['client'=>$client]);
     }

     public function getDelete($id){
     	 $client = Client::find($id);
     	 // echo count($client->getComment);
     	 // echo count($client->getOrder);
     	 if(count($client->getComment)>0||count($client->getOrder)>0){
     	 	return redirect('admin/client/list')->with('message','Can not Delete');
     	 }
     	 else{
     	 	$client->delete();
     	 	return redirect('admin/client/list')->with('message','Deleted');
     	 }
     }

     public function getDeleteMany(Request $request){
     	  $arr=  $request->client_check;
     	  $client = Client::whereIn('id',$arr)->get();
     	  foreach ($client as $cl) {
     	  	 if(count($cl->getComment)>0||count($cl->getOrder)>0){
     	 	return redirect('admin/client/list')->with('message','Can not Delete');
     	   }
     	  }
          $client = Client::whereIn('id',$arr)->delete();
     	  	return redirect('admin/client/list')->with('message','Deleted');
     	
     }
}
