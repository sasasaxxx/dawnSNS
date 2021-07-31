<?php

namespace App\Http\Controllers;

//0731追記
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

use Auth;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //0731追記
    // public function __construct()
    // {
    // //ログインしていない場合は、ログイン画面へ移動する
    // $this->middleware('auth');
    // // 全てのページで共通に使える情報をビューに送る
    // $this->middleware(function ($request, $next) {

    // $username = Auth::user();

    // View::share('username', $username['username']);

    // return $next($request);
    // });
    // }

}
