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
        $edited = Order::find($target);
        $header = '訂單管理-編輯頁';
        $slot = '';
        return view('hw_bootstrap.order.edit', compact('edited', 'header', 'slot'));
    }
    public function update($target, Request $req) {
        // $user = User::find($target);

        // $user->name = $req->name;
        // $user->power = $req->power;

        // if (Hash::needsRehash($req->password)){
        //     $user->password = Hash::make($req->password);
        // }

        // $user->save();

        // return redirect('/account');
    }

}
