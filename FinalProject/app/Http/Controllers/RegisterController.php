<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function postRegister(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'email' => "required|unique:users",
                'pass' => 'required',
                'cofirm'  => 'required|same:pass',
                'name' => 'required',
            ]);
                    $user = new User();
                    $user->email =  $request->input("email");
                    $user->password = bcrypt($request->input("pass"));
                    $user->name = $request->input("name");
                    $user->save();
                    $details =[
                        'email'=>  $request->input("email"),
                        'pass'=>   $request->input("pass") ,
                        'name'=>  $request->input("name")
                ];
                Mail::send('content_email',$details,function($message) use($request){
                    $message->from ('long.duc.5074@gmail.com','Leo2k');
                    $message->to ($request->email,$request->name);
                    $message->subject('Mail cofirm account');
                });
                    return redirect()->route('logi')-> with ('message2','Register succesful');
               
            }
    
    }
}
