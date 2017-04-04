<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    /*
    *  call index View
    */
    public function getIndex(){
    	
    	
       return view('page.trangchu');
    }
    

    
}
