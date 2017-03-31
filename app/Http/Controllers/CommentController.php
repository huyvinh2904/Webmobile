<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
class CommentController extends Controller
{
    //
    public function getList(){
        $comment = Comment::paginate(10);
        return view('admin.comment.list',['comment'=>$comment]);
    }
    public function getDelete($id){
         $comment = Comment::find($id);
         $comment->delete();
         return redirect('admin/comment/list');
    }
}
