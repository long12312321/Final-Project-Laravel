<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use DB;


class AdminController extends Controller
{
    public function index(){
        $list_user =  DB::table('users')->paginate(2);
        // $list_user = $list_user->get();
        return view('admin/adminUser',['list_user' => $list_user]);
    }
    public function getUser(Request $request){
        $ema = $request->input("email");
        $pass = $request->input("password");
        $name = $request->input("name");
        $checkAcc = DB::table('users')-> where('email',$ema)->first();
            if($checkAcc){
                return redirect()->route('ad')-> with ('message1','Email exists');
            }else{
                $user = new User();
                $user->email = $ema;
                $user->password = bcrypt($pass);
                $user->name = $name;
                $user->save();
                return redirect()->route('ad');
            }
       
    }
    public function deleteUser(Request $request){
        User::find($request->id)->delete();
        return redirect()->route('ad');
    }
    public function viewIndex($id){
        $user = User::find($id);
        return view('admin/editUser',['user' => $user]);
    }
    public function updateUser(Request $request ,$id){
        $checkAcc = DB::table('users')-> where('id',$id)->value('email');
        $email = DB::table('users')-> where('email',$request->input('email'))->value('email');
            if($checkAcc == $email){
                $user =User::find($id);
                $user->id = $id;
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = bcrypt($request->password);
                $user->role = $request->input('role');
                $user ->save();
                return redirect()->route('ad'); 
            }else{
                $mail = DB::table('users')-> where('email',$email);
                if($mail){
                    return redirect()->route('ad')-> with ('message2','Email exists can not update');
                }else{
                    $user =User::find($id);
                    $user->id = $id;
                    $user->name = $request->input('name');
                    $user->email = $request->input('email');
                    $user->password = bcrypt($request->password);
                    $user->role = $request->input('role');
                    $user ->save();
                    return redirect()->route('ad'); 
                }
            
            } 
    }
// Admin Post
    public function indexPost(){
        $list_post =  DB::table('posts')->paginate(2);
        return view('admin/adminPost',['list_post' => $list_post]);
    }

    public function getPost(Request $request){
        $title = $request->input("title");
        $short = $request->input("short");
        $descrip = $request->input("descrip");
        $link_img = $request->input("image");
        $checktitle = DB::table('posts')-> where('title',$title)->first();
            if($checktitle){
                return redirect()->route('ap')-> with ('message1','Title exists');
            }else{
                $post = new Post();
                $post->title = $title;
                $post->short_des = $short;
                $post->description = $descrip;
                $post->image = $link_img;
                $post->save();
                return redirect()->route('ap');
            }
       
    }
    public function deletePost(Request $request){
        Post::find($request->id)->delete();
        return redirect()->route('ap');
    }
    public function viewPost($id){
        $post = Post::find($id);
        return view('admin/editPost',['post' => $post]);
    }
    public function updatePost(Request $request ,$id){
        $checktitle = DB::table('posts')-> where('id',$id)->value('title');
        $title = DB::table('posts')-> where('title',$request->input('title'))->value('title');
            if($checktitle == $title){
                $post = Post::find($id);
                $post->id = $id;
                $post->title = $request->input('title');
                $post->short_des = $request->input('short');
                $post->description = $request->input('descrip');
                $post->image = $request->input('image');
                $post ->save();
                return redirect()->route('ap'); 
            }else{
                $ti = DB::table('posts')-> where('title',$title);
                if($ti){
                    return redirect()->route('ap')-> with ('message2','Title exists can not update');
                }else{
                    $post = Post::find($id);
                    $post->id = $id;
                    $post->title = $request->input('title');
                    $post->short_des = $request->input('short');
                    $post->description = $request->input('descrip');
                    $post->image = $request->input('image');
                    $post ->save();
                    return redirect()->route('ap'); 
                }
            
            } 
    }
    // Admin Comment
    public function indexComment(){
        $list_comment =  DB::table('comments')->paginate(2);
        return view('admin/adminComment',['list_comment' => $list_comment]);
    }

    public function getComment(Request $request){
        $user_id = $request->input("user_id");
        $post_id = $request->input("post_id");
        $con = $request->input("content");
        $checkIdu = DB::table('users')-> where('id',$user_id)->first();
        $checkIdp = DB::table('posts')-> where('id',$post_id)->first();
        if($checkIdu){
                if($checkIdp){
                    $comment = new Comment();
                    $comment->users_id = $user_id;
                    $comment->posts_id = $post_id;
                    $comment->content = $con;
                    $comment->save();
                    return redirect()->route('ac');
                }else{
                    return redirect()->route('ac')-> with ('message','Post not exists');
                }
        }else{
            return redirect()->route('ac')-> with ('message','User not exists');
        }
            
       
    }
    public function deleteComment(Request $request){
        Comment::find($request->id)->delete();
        return redirect()->route('ac');
    }
    public function viewComment($id){
        $comment = Comment::find($id);
        return view('admin/editComment',['comment' => $comment]);
    }
    public function updateComment(Request $request ,$id){
        $checkIdu = DB::table('users')-> where('id',$request->input('user_id'))->first();
        $checkIdp = DB::table('posts')-> where('id',$request->input('post_id'))->first();
                if($checkIdu){
                    if($checkIdp){
                        $comment = Comment::find($id);
                        $comment->id = $id;
                        $comment->users_id = $request->input('user_id');
                        $comment->posts_id = $request->input('post_id');
                        $comment->content = $request->input('content');
                        $comment ->save();
                        return redirect()->route('ac'); 
                    }else{
                        return redirect("editComment/$id")-> with ('message','Post not exists');
                    }
                }else{
                    return redirect("editComment/$id")-> with ('message','User not exists');
                }
          
    }
}
