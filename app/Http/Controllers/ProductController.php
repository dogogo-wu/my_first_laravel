<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductImg;

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

        // dd($req->all());
        if($req->product_img){
            $path = FilesController::imgUpload($req->product_img, 'product');
        }else{
            $path = null;
        }

        $get_prod = Product::create([
            'img' => $path,
            'name' => $req->product_name,
            'price' => $req->product_price,
            'number' => $req->product_number,
            'introduction' => $req->product_intro,
        ]);
        if($req->hasfile('second_img')){
            foreach ($req->second_img as $key => $value) {
                $path = FilesController::imgUpload($value, 'product');
                ProductImg::create([
                    'img_path' => $path,
                    'product_id' => $get_prod->id,
                ]);
            }
        }



        return redirect('/product');
    }

    public function delete($target) {

        $targetObj = Product::find($target);

        $imgsAry = ProductImg::where('product_id', $target)->get();
        foreach ($imgsAry as $key => $value) {
            FilesController::deleteUpload($value->img_path);
            $value->delete();
        }

        FilesController::deleteUpload($targetObj->img);
        $targetObj->delete();

        return redirect('/product');
    }

    public function edit($target) {
        $edited = Product::find($target);
        return view('hw_bootstrap.product.edit', compact('edited'));
    }

    public function update($target, Request $req) {
        $targetObj = Product::find($target);

        if($req->hasfile('product_img')){
            $path = FilesController::imgUpload($req->product_img, 'product');
            FilesController::deleteUpload($targetObj->img);

            $targetObj->img = $path;
        }

        $targetObj->name = $req->product_name;
        $targetObj->price = $req->product_price;
        $targetObj->number = $req->product_number;
        $targetObj->introduction = $req->product_intro;
        $targetObj->save();

        if($req->hasfile('second_img')){
            foreach ($req->second_img as $key => $value) {
                $path = FilesController::imgUpload($value, 'product');
                ProductImg::create([
                    'img_path' => $path,
                    'product_id' => $target,
                ]);
            }
        }

        return redirect('/product');
    }

    public function del_secimg_func($sec_tar){
        $tarimg = ProductImg::find($sec_tar);
        $prod_id = $tarimg -> product_id;

        FilesController::deleteUpload($tarimg->img_path);
        $tarimg->delete();

        return redirect('/product/edit/'.$prod_id);
    }
}
