<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $productAry = Product::orderBy('id', 'desc')->get();

        return view('hw_bootstrap.product.product', compact('productAry'));
    }

    public function create() {
        return view('hw_bootstrap.product.create');
    }

    public function store(Request $req) {
        Product::create([
            'name' => $req->product_name,
            'price' => $req->product_price,
            'number' => $req->product_number,
            'introduction' => $req->product_intro,
        ]);

        return redirect('/product');
    }

    public function delete($target) {
        Product::where('id', $target)->delete();
        return redirect('/product');
    }

    public function edit($target) {
        $edited = Product::find($target);
        return view('hw_bootstrap.product.edit', compact('edited'));
    }

    public function update($target, Request $req) {
        Product::where('id', $target)->update([
            'name' => $req->product_name,
            'price' => $req->product_price,
            'number' => $req->product_number,
            'introduction' => $req->product_intro,
        ]);

        return redirect('/product');
    }
}
