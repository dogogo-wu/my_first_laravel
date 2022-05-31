<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        // $orderAry = Order::orderBy('id', 'desc')->get();

        $header = '訂單管理-編輯頁';
        $slot = '';

        return view('hw_bootstrap.price.price', compact('header','slot'));
    }
}
