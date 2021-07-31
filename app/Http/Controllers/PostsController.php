<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $list = \DB::table('posts')->get();
        return view('posts.index',['list'=>$list]);
    }

}
