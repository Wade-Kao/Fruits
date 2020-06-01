<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::get();
        return $items;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $branchlists = \App\Branchlist::pluck('bname', 'id');
        // dd($branchlists);
        return view('items.create', compact('branchlists'));
        //  return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateItemRequest $request)
    {
        //$request->all()輸⼊資料的陣列
        // dd($request->all());

        //except()⽤於排除部分欄位
        //dd($request->except('_token'));

        //only()⽤於只取部分欄位
        //dd($request->only('title'));
        //dd($request->only(['title', 'enabled']));

        //has()針對存在但為空值的欄位仍回傳False
        //dd($request->has('title'));

        //exists()只要欄位存在就回傳True
        // dd($request->exists('title'));
        //dd($request->exists('titddle'));

        // input()，第⼆參數為預設值
        // dd($request->input('title', 'xx'));

        //json()針對標頭不是applicaiton/json，仍能以JSON來取出
        //dd($request->json('title'));

        //hasFile()能確認是否有上傳的檔
        // dd($request->hasFile('title'));

        // isValid()能確認檔案是否上傳成功
        //dd($request->isValid('title'));

        //驗證帳號
        //控制器驗證
        // $this->validate($request, [
        //     'title' => 'required|max:5',
        //     'size' => 'required',
        // ]);

        //手動建立驗證器
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|max:5',
        //     'size' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     //我的錯誤處裡
        //     dd('錯誤了!!');
        // }

        //表單請求類別
        // ⽣成指令範例： php artisan make:request CreateItemRequest
        // 檔案位置：app/Http/Requests/CreateItemRequest.php
        // 在控制器方法啟用此驗證類別
        // public function store(Request $request)->
        // public function store(CreateItemRequest $request)

        //寫到資料庫
        $item = Item::create($request->all());

        //轉址
        return redirect('items');

        // //使用Item物件的屬性來新增
        // $item = new Item;
        // $item->title = '手機一台';
        // $item->price = '15000';
        // $item->pic = 'https://member.ithome.com.tw/avatars/88232?s=ithelp';
        // $item->enabled = 1;
        // $item->size = 'L';
        // $item->email = 'admin@demo.com';
        // $item->save();

        // //使用Item建構子來新增
        //         $item = new Item([
        //             'title' => '手機2台',
        //             'price' => '15000',
        //             'pic' => 'https://member.ithome.com.tw/avatars/88232?s=ithelp',
        //             'enabled' => 1,
        //             'size' => 'L',
        //             'email' => 'admin222@demo.com',
        //         ]);
        //         $item->save();

        // //使用Item的create()來新增
        //         $data = [
        //             'title' => '手機4台',
        //             'price' => '15000',
        //             'pic' => 'https://member.ithome.com.tw/avatars/88232?s=ithelp',
        //             'enabled' => 1,
        //             'size' => 'L',
        //             'email' => 'admin444@demo.com',
        //         ];
        //         $item = Item::create($data);
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
        $item = Item::findOrFail($id);
        // dd($branchlists);
        return view('items.edit', compact('branchlists', 'item'));
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
        //  dd($request->all());
        $item = Item::find($id);
        // dd($item);
        //驗證表單

        //更新資料

        $item = Item::updateOrCreate(['id' => $id], $request->except(['_method', '_token', 'id']));
        //轉址
        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // //使用資料參考來刪除
        // $item->delete();

        // //使用主鍵來刪除
        // Item::destroy($item->id);
    }
}
