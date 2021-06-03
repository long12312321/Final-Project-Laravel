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
        $request->validate([
            'email' => "required|email|unique:users,email",
            'password'  => 'required',
            'name'  => 'required',
        ]);
                $user = new User();
                $user->email = $request->input('email');
                $user->password = bcrypt($request->input('email'));
                $user->name = $request->input('name');
                $user->save();
                return redirect()->route('ad');
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
        $request->validate([
            'email' => "required|email|unique:users,email,$id",
            'password'  => 'required',
            'name'  => 'required',
            'role'  => 'required|int',

        ]);
                    $user =User::find($id);
                    $user->id = $id;
                    $user->name = $request->input('name');
                    $user->email = $request->input('email');
                    $user->password = bcrypt($request->password);
                    $user->role = $request->input('role');
                    $user ->save();
                    return redirect()->route('ad'); 
            
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
        $request->validate([
            'title' => "required|unique:posts,title|max:255",
            'short'  => 'required',
            'descrip' => 'required',
            'image'  => 'required',

        ]);
                $post = new Post();
                $post->title = $title;
                $post->short_des = $short;
                $post->description = $descrip;
                $post->image = $link_img;
                $post->save();
                return redirect()->route('ap');
       
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
        $request->validate([
            'title' => "required|unique:posts,title,$id|max:255",
            'short'  => 'required',
            'descrip' => 'required',
            'image'  => 'required',

        ]);
          
                $post = Post::find($id);
                $post->id = $id;
                $post->title = $request->input('title');
                $post->short_des = $request->input('short');
                $post->description = $request->input('descrip');
                $post->image = $request->input('image');
                $post ->save();
                return redirect()->route('ap'); 
        
    }
    // Admin Comment
    public function indexComment(){
        $list_comment =  DB::table('comments')->paginate(2);
        return view('admin/adminComment',['list_comment' => $list_comment]);
    }

    public function getComment(Request $request){
        $request->validate([
            'user_id' => "required|int|exists:users,id",
            'post_id' => "required|int|exists:posts,id",
            'content'  => 'required',
        ]);
                    $comment = new Comment();
                    $comment->users_id = $request->input("user_id");
                    $comment->posts_id = $request->input("post_id");
                    $comment->content = $request->input("content");
                    $comment->save();
                    return redirect()->route('ac');
            
       
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
        $request->validate([
            'user_id' => "required|int|exists:users,id",
            'post_id' => "required|int|exists:posts,id",
            'content'  => 'required',
        ]);
                        $comment = Comment::find($id);
                        $comment->id = $id;
                        $comment->users_id = $request->input('user_id');
                        $comment->posts_id = $request->input('post_id');
                        $comment->content = $request->input('content');
                        $comment ->save();
                        return redirect()->route('ac'); 
              
          
    }
}
