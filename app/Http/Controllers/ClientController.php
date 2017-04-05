<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Client;
use App\ClientLogin;
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

     public function getDetail($id){
          $client = Client::find($id);
          return view ('admin.client.detail',['client'=>$client]);

     }
    public function Confirm($code_active)
    {
        if( ! $code_active)
        {
            throw new InvalidConfirmationCodeException;
        }

        
        $client = Client::where('code_active',$code_active)->first();
        

        if ($client)
        {
            $client->active = 2;
            $client->code_active = null;
            $client->save();
        }

        

        

        return redirect('login')->with('thongbao','You have successfully verified your account.');
    }
}

    
    


