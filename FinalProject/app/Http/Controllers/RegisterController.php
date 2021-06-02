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
        $acc = $request->input("email");
            $pass = $request->input("pass");
            $cpass = $request->input("cofirm");
            $name = $request->input("name");
        if($request->isMethod('post')){
            $checkAcc = DB::table('users')-> where('email',$acc)->first();
            if($checkAcc){
                return redirect()->route('re')-> with ('message1','Account exists');
            }else{
                if ($pass === $cpass){
                    $user = new User();
                    $user->email = $acc;
                    $user->password = bcrypt($pass);
                    $user->name = $name;
                    $user->save();
                    $details =[
                        'email'=> $acc,
                        'pass'=>  $pass ,
                        'name'=> $name
                ];
                Mail::send('content_email',$details,function($message) use($request){
                    $message->from ('long.duc.5074@gmail.com','Leo2k');
                    $message->to ($request->email,$request->name);
                    $message->subject('Mail cofirm account');
                });
                    return redirect()->route('logi')-> with ('message2','Register succesful');
                }else{
                    return redirect()->route('re')-> with ('message3','2 pass should same');
                }
            }
    }
    }
}
