<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    //
     public function getList(){
         return View('admin.client.list');
     }

}
