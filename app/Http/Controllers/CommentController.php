<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Comment;
class CommentController extends Controller
{
    //
    /*
    * get list Comment
    */
    public function getList(){
        $comment = Comment::paginate(10);
        return view('admin.comment.list',['comment'=>$comment]);
    }

     /*
    *  return Delete Comment
    */
    public function getDelete($id){
         $comment = Comment::find($id);
         $comment->delete();
         return redirect('admin/comment/list')->with('message','Deleted');
    }

    /*
    *  return Delete Many Commnet
    */
    public function postDeleteMany(Request $request){
         $arr= $request->comment_check;
         $comment = Comment::whereIn('id',$arr)->delete();
         return redirect('admin/comment/list')->with('message','Deleted');
    }
}
