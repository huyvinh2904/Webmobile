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

    	$this->validate($request,
            [
            'email'=>'required|min:5|max:40',
            'password'=>'required'


            ],
            [
            'email.required'=>'Ban chua nhap email...',
            'email.min'=>'it nhat 5 ky tu',
            'email.max'=>'Nhieu nhat 40 ky tu',
            'password.required'=>'Ban chua nhap mat khau'

            ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>1])) {
            return redirect('item/list');
        }
        else{
            return redirect('login')->with('thongbao','Dang nhap khong thanh cong');
        }

    }
    public function getLogout(){
        Auth::logout();

        return redirect('login');
    }
    }

