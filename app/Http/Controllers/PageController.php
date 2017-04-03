<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    /*
    *  call index View
    */
    public function getIndex(){
    	return view('layout.index');
    }
}
