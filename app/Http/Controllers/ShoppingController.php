<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class ShoppingController extends Controller
{
    public function bsweb_cart01_func() {
        // 已在Route加auth，不需要判斷了
        // if(!Auth::check()){
        //     return redirect('/login')->with('loginFirst', '請先登入~');
        // }

        $cartProdAry = ShoppingCart::where('user_id', Auth::user()->id)->get();

        // dd($cartProdAry->all());
        return view('hw_bootstrap.shopcart.cart_01',compact('cartProdAry'));
    }

    public function bsweb_cart02_func(Request $req) {

        $qty = $req->qty;
        session([
            'amount' => $qty
        ]);

        // // 不使用session 直接將新數量寫入購物車(待買清單)的資料表
        // $shopping = ShoppingCart::where('user_id', Auth::id())->get();

        // //事先將新的數量更新至資料表中
        // foreach ($shopping as $key => $item) {
        //     $item->qty = $request->qty[$key];
        //     $item->save();
        // }


        return view('hw_bootstrap.shopcart.cart_02');
    }

    public function bsweb_cart03_func(Request $req) {
        // dd(session()->get('amount'));
        // dd($req->all());
        session([
            'pay' => $req->payment_type,
            'deliver'=> $req->shipping_type,
        ]);
        $deliver = $req->shipping_type;
        return view('hw_bootstrap.shopcart.cart_03', compact('deliver'));
    }

    public function bsweb_cart04_func(Request $req) {
        // dump(session()->all());
        // dd($req->all());

        $cartAry = ShoppingCart::where('user_id', Auth::id())->get();
        $subtot = 0;

        foreach ($cartAry as $key => $cart) {
            $subtot += $cart->product->price * session()->get('amount')[$key];
        }

        if(session()->get('deliver')=='1'){
            $fee = 150;
        }else{
            $fee = 60;
        }

        $order = Order::create([
            'subtotal' => $subtot,
            'ship_fee' => $fee,
            'total' => $subtot + $fee,
            'qty_all' => count(session()->get('amount')),
            'name' => $req->myName,
            'phone' => $req->myPhone,
            'email' => $req->myEmail,
            'payment' => session()->get('pay'),
            'ship_method' => session()->get('deliver'),
            'status' => 1,
            'user_id' => Auth::id(),
        ]);

        if($order->ship_method == 1){
            $order->addr = $req->myAreaCode.$req->myCity.$req->myAddr;
        }else{
            $order->ship_store = $req->myAreaCode.$req->myCity.$req->myAddr;
        }

        $order->save();
        // dd($order);

        foreach ($cartAry as $key => $value) {
            OrderDetail::create([
                'product_id' => $value->product->id,
                'price' => $value->product->price,
                'qty' => $value->qty,
                'order_id' => $order->id,
            ]);
        }

        // 訂單建立成功, 將購物車資料清除
        ShoppingCart::where('user_id', Auth::id())->delete();

        // 為了不要F5的時候，重複送出
        return redirect('/show_order/'.$order->id);
    }

    // 為了不要F5的時候，重複送出
    public function show_order($target){
        $order = Order::find($target);
        return view('hw_bootstrap.shopcart.cart_04', compact('order'));
    }
}
