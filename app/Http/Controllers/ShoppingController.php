<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderComplete;

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

        // //使用Session傳Prod數量
        // $qty = $req->qty;
        // session([
        //     'amount' => $qty
        // ]);

        // 不使用session 直接將新數量寫入購物車(待買清單)的資料表
        $cartProdAry = ShoppingCart::where('user_id', Auth::id())->get();

        // 事先將新的數量更新至資料表中
        foreach ($cartProdAry as $key => $item) {
            $item->qty = $req->qty[$key];
            $item->save();
        }

        // 先算好小計，直接傳到前面
        $subtot = 0;
        foreach ($cartProdAry as $cart) {
            $subtot += $cart->product->price * $cart->qty;
        }
        session([
            'mysubtot' => $subtot,
        ]);


        return view('hw_bootstrap.shopcart.cart_02', compact('cartProdAry','subtot'));
    }

    public function bsweb_cart03_func(Request $req) {
        // dd(session()->get('amount'));
        // dd($req->all());
        session([
            'pay' => $req->payment_type,
            'deliver'=> $req->shipping_type,
        ]);

        $cartProdAry = ShoppingCart::where('user_id', Auth::id())->get();

        $deliver = $req->shipping_type;

        if ($deliver == 1) {
            $shipfee = 150;
        }else{
            $shipfee = 60;
        }
        $myAry = [
            'subtot' => session()->get('mysubtot'),
            'shipfee' => $shipfee,
            'prodcate' => count($cartProdAry),
        ];

        return view('hw_bootstrap.shopcart.cart_03', compact('deliver','myAry'));
    }

    public function bsweb_cart04_func(Request $req) {
        // dump(session()->all());
        // dd($req->all());

        $cartAry = ShoppingCart::where('user_id', Auth::id())->get();
        $subtot = 0;

        // //Session傳amount方法
        // foreach ($cartAry as $key => $cart) {
        //     $subtot += $cart->product->price * session()->get('amount')[$key];
        // }

        //直接更新DB方法
        foreach ($cartAry as $key => $cart) {
            $subtot += $cart->product->price * $cart->qty;
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
            // 'qty_all' => count(session()->get('amount')),
            'qty_all' => count($cartAry),
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

        $data = [
            'order_id' => $order->id,
            'user_name' => Auth::user()->name,
            'subject' => '感謝您於電商網訂購'.$order->qty_all.'樣點心',
        ];
        // 寄信
        Mail::to(Auth::user()->email)->send(new OrderComplete($data));

        // 為了不要F5的時候，重複送出
        return redirect('/show_order/'.$order->id);
    }

    // 為了不要F5的時候，重複送出
    public function show_order($target){
        $order = Order::find($target);
        return view('hw_bootstrap.shopcart.cart_04', compact('order'));
    }

    public function cart01_del_func($target){
        $deltar = ShoppingCart::find($target);
        $deltar->delete();

        return redirect('/cart01');
    }
}
