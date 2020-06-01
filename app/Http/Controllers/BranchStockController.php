<?php

namespace App\Http\Controllers;

use APP\Branchstock;
use APP\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BranchStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $branchstocks = Branchstock::get();
        return $branchstocks;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        //  $branchlists = \App\Branchlist::pluck('bname', 'id');
        $branchlists = \App\Branchlist::where('id', 1)->get()->pluck('bname', 'id');

        // dd($branchlists);
        return view('branchstocks.create', compact('branchlists'));
        //  return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $branchlists = \App\Branchlist::pluck('bname', 'id');
        $branchstock = \App\Branchstock::findOrFail($id);
        // dd($branchlists);
        return view('branchstocks.edit', compact('branchlists', 'branchstock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        //  dd($request->all());
        $branchstock = Branchstock::find($id);
        // dd($item);
        //驗證表單

        //更新資料

        $branchstock = Branchstock::updateOrCreate(['id' => $id], $request->except(['_method', '_token', 'id']));
        //轉址
        return redirect('/branchstocks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//     驗證相關幫助方法
    // 取得登入用戶

// Auth::user() 取得登入用戶實例
    // Auth::id() 取得登入用戶主鍵
    // $request->user() 取得登入用戶實例
    // 範例碼

    public function who(Request $request)
    {
        //取得登入用戶
        dd(Auth::user()->id);

        // //取得登入用戶主鍵
        // dd(Auth::id());

        // //取得登入用戶
        // dd($request->user());
    }
// 用程式進行登入

// Auth::login($user)
    // Auth::login($user,true) //登入並記得我
    // Auth::loginUsingId($id) //使用用戶id進行登入
    // Auth::guard(‘admin’)->login($user)
    // 範例碼

    public function selflogin()
    {
        $user = User::findOrFail(1);
        Auth::login($user);
        return redirect('/home');

    }

//用程式進行登出

// Auth::logout()
    // 範例碼

    public function logout()
    {
        Auth::logout();
    }
// 確認是否完成登入

// Auth::check()
    // 範例碼

    public function checkAuth()
    {
        dd(Auth::check());
    }

}
