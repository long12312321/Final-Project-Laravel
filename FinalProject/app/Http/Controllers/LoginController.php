<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function postLogin(Request $request){
        $e = $request->input('email');
        if(Auth::attempt(['email' => $request->email,'password'=> $request->pass])){
               $data = DB::table('users')-> where('email',$e)->value('role');
            
                return redirect()->route('ho');
            
        }else{
            return redirect()->route('logi')-> with('notification','Login not successful');
        }
    }
    public function logOut(){
        Auth::logout();
        return redirect()->route('logi');
   }
}
