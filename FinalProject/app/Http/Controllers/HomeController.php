<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $list_post =  DB::table('posts')->paginate(2);
        return view('home',['list_post' => $list_post]);
    }
}
