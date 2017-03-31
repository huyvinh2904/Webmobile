<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getLogin(){
    	return view('admin.login');

    }
    public function postLogin(Request $request){

    	if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
			echo "abcxyz";
		}
		else{
			return redirect('admin.login')->with('thongbao','Dang nhap khong thanh cong');
		}


    }
    public function getLogout(){
        Auth::logout();

        return redirect('admin.login');

        

    }
    }

