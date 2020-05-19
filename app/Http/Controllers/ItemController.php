<?php

namespace App\Http\Controllers;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //使用Item物件的屬性來新增
        $item = new Item;
        $item->title = '手機一台';
        $item->price = '15000';
        $item->pic = 'https://member.ithome.com.tw/avatars/88232?s=ithelp';
        $item->enabled = 1;
        $item->size = 'L';
        $item->email = 'admin@demo.com';
        $item->save();

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
}
