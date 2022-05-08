<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
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
        return view('hw_bootstrap.shopcart.cart_02');
    }

    public function bsweb_cart03_func(Request $req) {
        // dd(session()->get('amount'));
        // dd($req->all());
        session([
            'pay' => $req->payment_type,
            'deliver'=> $req->shipping_type,
        ]);
        return view('hw_bootstrap.shopcart.cart_03');
    }

    public function bsweb_cart04_func(Request $req) {
        dump(session()->all());
        dd($req->all());
        return view('hw_bootstrap.shopcart.cart_04');
    }
}
