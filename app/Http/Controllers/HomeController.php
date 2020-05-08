<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        // //此控制器的所有方法都需要有登入才能訪問
        // $this->middleware('auth');
        // //此控制器的store()需要有登入才能訪問
        // $this->middleware('auth')->only('store');
        // //除index()外，此控制器的其他方法需要有登入才能訪問
        // $this->middleware('auth')->except('index');
    }

    //傳參數
    public function signup(Request $request, $id, $course)
    {
        $data = ['id' => $id, 'course' => $course, 'url' => '<a href="http://goblinlab.org">http://goblinlab.org</a>'];
        $url = '<a href="http://goblinlab.org">http://goblinlab.org</a>';
        //作法1 利用view()的第2參數來傳
        return view('signup', $data);
        // //作法2 利用with()方法來傳
        // return view('signup')->with($data);
        // //作法3 搭配compact()來建立陣列
        // return view('signup', compact('id', 'course', 'url'));
    }
    //全域變數
    public function index()
    {
        // return view('index');

        $data = ['apple', 'lemon', 'banana'];
        return view('index', ['data' => $data, 'name' => 'laravel']);
    }

}
