<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use \App\Item;
use \Cart;

class ShopController extends Controller
{
    //

    public function addItem(Item $item)
    {
        $userid = Auth::user()->id;
        $data = [
            'id' => $item->id,
            'name' => $item->title,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => [],
            'associatedModel' => $item,
        ];
        \Cart::session($userid)->add($data);
        flash('商品已加入購物車!!')->success(); //綠色框
        return view('flashmassageindex');

    }

    public function updateItem(Item $item, $qty)
    {
        \Cart::session(Auth::user()->id)->update($item->id, [
            'quantity' => $qty,
        ]);
        flash('商品已更新購物車!!')->success(); //綠色框
        return view('flashmassageindex');
    }
    public function removeItem(Item $item)
    {
        \Cart::session(Auth::user()->id)->remove($item->id);
        flash('商品已移除購物車!!')->success(); //綠色框
        return view('flashmassageindex');
    }

    public function getContent()
    {
        $cartContent = \Cart::session(Auth::user()->id)->getContent();
        dd($cartContent);
    }

    public function checkEmpty()
    {
        $isEmpty = \Cart::session(Auth::user()->id)->isEmpty();
        dd($isEmpty);
    }
    public function getTotalQuantity()
    {
        $userID = Auth::user()->id;
        $qty = \Cart::session($userID)->getTotalQuantity();
        return $qty;
    }

    public function getSubTotal()
    {
        $userID = Auth::user()->id;
        $subtotal = \Cart::session($userID)->getSubTotal();

        return $subtotal;
    }

    public function getTotal()
    {
        $userID = Auth::user()->id;
        $total = \Cart::session($userID)->getTotal();
        return $total;
    }

    public function clear()
    {
        $userID = Auth::user()->id;
        \Cart::session($userID)->clear();
        flash('購物車商品已清空!!')->success(); //綠色框
        return view('flashmassageindex');
    }
}
