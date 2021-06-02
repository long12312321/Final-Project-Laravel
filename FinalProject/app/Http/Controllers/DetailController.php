<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Auth;
use DB; 

class DetailController extends Controller
{
    public function viewIndex($id){
        $list_post = Post::find($id);
        $comment = Comment::where('posts_id',$id)->get();
        $list = DB::table('comments')->join('users','users.id','comments.users_id')->where('posts_id', $id)->select('comments.*','users.name')->paginate(2);
        return view('detail',['list_post' => $list_post],['list_comment' => $list]);
    }
    public function postComment(Request $request,$id){
        $id_post = $id;
        $posts= Post::find($id);
        $comment = new Comment();
        $comment->posts_id = $id_post;
        $comment->users_id= Auth::user()->id;
        $comment->content =$request->input('content');
        $comment -> save();
        return redirect("detail/$id")->with('message','Comment succesful');
    }
}
