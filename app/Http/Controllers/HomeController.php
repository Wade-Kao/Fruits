<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function flashmassageindex()
    {

        //flash('訂單建立完成!!')->success(); //綠色框
        //flash('訂單建立失敗!!')->error();   //紅色框
        flash('請向客服確認此訂單!!')->warning(); //橘色框

        //overlay 須配合Jquery等套件
        // <head>
        // <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        // </head>
        //     <body>
        //     <script src="//code.jquery.com/jquery.js"></script>
        //     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        // <script>
        //     $('#flash-overlay-modal').modal();
        // </script>
        // </body>
        //flash('訂單建立完成!!')->overlay(); //跳出視窗
        //flash()->overlay('Modal Message', 'Modal Title'); //跳出帶標題視窗

        //flash('訂單建立完成')->important(); //加上關閉功能
        //flash('Message')->error()->important(); //結合外框與關閉功能
        return view('flashmassageindex');
    }
    public function saveSession()
    {
        session(['welcome' => 'Hello!']);
        flash('Session 建立完成!!')->success(); //綠色框
        return view('flashmassageindex');
    }
    public function savearySession(Request $request)
    {
        $request->session()->put('ary', []);
        flash('Session put建立完成!!')->success(); //綠色框
        return view('flashmassageindex');
    }

    public function pushSession(Request $request)
    {
        $request->session()->push('ary', 'Switch');
        flash('Session push建立完成!!')->success(); //綠色框
        return view('flashmassageindex');
    }
    public function getSession(Request $request)
    {
        dd($request->session()->get('welcome', '空'));
    }
    public function hasSession(Request $request)
    {
        dd($request->session()->has('welcome'));
    }
    public function allSession(Request $request)
    {
        dd($request->session()->all());
    }

    public function forgetSession(Request $request)
    {
        $request->session()->forget('welcome');
        flash('已刪除welcome session')->error(); //綠色框
        return view('flashmassageindex');
    }
}
