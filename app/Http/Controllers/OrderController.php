<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orderAry = Order::orderBy('id', 'desc')->get();

        $header = '訂單管理-編輯頁';
        $slot = '';

        return view('hw_bootstrap.order.order', compact('orderAry','header','slot'));
    }
    public function edit($target) {
        $order = Order::find($target);
        $header = '訂單管理-編輯頁';
        $slot = '';
        return view('hw_bootstrap.order.edit01', compact('order', 'header', 'slot'));
    }
    public function update($target, Request $req) {

        $order = Order::find($target);
        $order->status = $req->status;
        $order->ps = $req->ps;
        $order->save();

        return redirect('/order');
    }

}
