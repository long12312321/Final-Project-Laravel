<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Validator;


class GetPasswordController extends Controller
{
    public function index(){
        return view('forgetpassword');
    }
    public function postGetPass(Request $request){     
       $request->validate([
        'email' => 'required|email|exists:users,email',
       ]);
        $mail = $request->input('email');
        $random = Str::random(6);
         DB::table('users')-> where('email',$mail)->update(['password' =>  bcrypt($random)]);

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
    }
}
