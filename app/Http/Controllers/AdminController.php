<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{
	
    public function getLogin(){
    	return view('admin.login');
    }
    public function postLogin(Request $request){

    	if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
			 return redirect('admin/cate/list');
		}
		else{
			return redirect('admin/login')->with('thongbao','Dang nhap khong thanh cong');
		}

    }
    public function getLogout(){
        Auth::logout();
        return redirect('admin/login');
    }

    public function getAdd(){
        return view('admin.user.add');
    }

    /**
    * @return a new add user
    */
    public function postAdd(Request $request){
         $this->validate($request,[
             'txtName'=>'required|min:3|max:100',
             'txtEmail'=> 'required|min:3|max:100|unique:admins,email',
              'txtPassword'=>'required|min:3|max:100',
              'txtpasswordAgain' => 'required|same:txtPassword'
         ],[
                'txtEmail.unique'=>'  Email haven been in data',
               'txtEmail.required'=>' Please enter email',
               'txtPassword.required'=>'Please enter password',
               'txtName.required'=>'Please enter Name',
               'txtpasswordAgain.required'=>'Please enter Password Again',
               'txtpasswordAgain.same' => 'Password not same',
               'txtEmail.min' => 'Email must have more 3 characters',
               'txtName.min' => 'Name must have more 3 characters',
               'txtPassword.min' => 'Pass must have more 3 characters',
         ]);

        $admin = new User();
        $admin->name = $request->txtName;
        $admin->email= $request->txtEmail;
        $admin->password = bcrypt($request->txtPassword) ;
        $admin->level =$request->level;
        $admin->save();

         return redirect('admin/user/add')->with('message','Add sussess');
    }

      public function getList(){
        $user = User::paginate(10);
        return view('admin.user.list',['user'=>$user]);
   }
     public function getDelete($id){
          $user = User::find($id);
          $user->delete();
         return redirect('admin/user/list')->with('message','Deleted');
     }

      public function getEdit($id){
           $user = User::find($id);
           return view('admin.user.edit',['user'=>$user]);
      }

      public function postEdit(Request $request,$id){
           $user = User::find($id);
           $user->level = $request->level;
           $user->save();
           return redirect('admin/user/edit/'.$id)->with('message','Edited');
      }

      public function postDeleteMany(Request $request){
           $arr = $request->user_check;
            $user = User::whereIn('id',$arr)->delete();
            return redirect('admin/user/list')->with('message','Deleted');
      }
}

