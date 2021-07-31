<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $list = \DB::table('posts')->get();
        $username = Auth::user()->username; //0731追記
        return view('posts.index',['list'=>$list, 'username'=>$username]); //0731追記
    }

}
