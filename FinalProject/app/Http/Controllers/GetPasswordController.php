<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class GetPasswordController extends Controller
{
    public function index(){
        return view('forgetpassword');
    }
    public function postGetPass(Request $request){
        $mail = $request->input('email');
        $random = Str::random(6);
        $checkEmail = DB::table('users')-> where('email',$mail)->count();
         DB::table('users')-> where('email',$mail)->update(['password' =>  bcrypt($random)]);
        if($checkEmail ==1){
            $details =[
                'email'=> $mail,
                'pass'=> $random
             ];
        Mail::send('getpass',$details,function($message) use($request){
            $message->from ('long.duc.5074@gmail.com','Leo2k');
            $message->to ($request->email,'');
            $message->subject('Send passwordd');
        });
                 return redirect()->route('logi')->with('forgetPass','Password sent email');
        }else{
            return redirect()->route('getPass')->with('message','Mail not exist ');
        }
    }
}
