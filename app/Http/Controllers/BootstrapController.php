<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductImg;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class BootstrapController extends Controller
{
    //
    public function bsweb_func() {

        // $mydataAry = DB::table('news')->orderBy('id', 'desc')->take(3)->get();
        // $mydataAry = DB::table('news')->take(3)->get();
        $mydataAry = DB::table('news')->inRandomOrder()->take(3)->get();

        // $banAry = Banner::inRandomOrder()->get();
        $banAry = Banner::get();

        $prodAry = Product::orderBy('id', 'desc')->take(8)->get();
        $prodRnd = Product::inRandomOrder()->first();

        return view('hw_bootstrap.index', compact('mydataAry', 'prodAry', 'prodRnd', 'banAry'));
    }

    public function bsweb_cart01_func() {
        return view('hw_bootstrap.cart_01');
    }

    public function bsweb_cart02_func() {
        return view('hw_bootstrap.cart_02');
    }

    public function bsweb_cart03_func() {
        return view('hw_bootstrap.cart_03');
    }

    public function bsweb_cart04_func() {
        return view('hw_bootstrap.cart_04');
    }

    public function bsweb_comment_func() {
        // $commentAry = DB::table('comments')->orderBy('id', 'desc')->get();
        $commentAry = Comment::orderBy('id', 'desc')->get();
        // dd($commentAry->all());
        return view('hw_bootstrap.comment', compact('commentAry'));
    }

    public function comment_save_func(Request $req) {
        // dd($req->all());
        // DB::table('comments')->insert([
        //     'tittle' => $req->myTittle,
        //     'name' => $req->myName,
        //     'content' => $req->myContent,
        // ]);

        Comment::create([
            'tittle' => $req->myTittle,
            'name' => $req->myName,
            'content' => $req->myContent,
        ]);

        return redirect('/comment');
    }

    public function comment_delete_func($target) {
        $deleted = Comment::where('id', $target)->delete();
        return redirect('/comment');
    }

    public function comment_edit_func($target) {
        // $edited = Comment::where('id', $target)->first();
        $edited = Comment::find($target);
        // dd($edited);
        return view('hw_bootstrap.edit', compact('edited'));
    }

    public function comment_update_func($target, Request $req) {

        Comment::where('id', $target)->update([
            'tittle' => $req->myTittle,
            'name' => $req->myName,
            'content' => $req->myContent,
        ]);

        return redirect('/comment');
    }

    public function into_prod_func($target) {

        $prodMain = Product::find($target);
        // $prodSecAry = ProductImg::where('product_id', $target)->get();

        return view('hw_bootstrap.into_prod', compact('prodMain'));
    }

    public function add_cart_func(Request $req) {

        $prod = Product::find($req->product_id);

        if($req->add_qty > $prod->number){
            $result = [
                'result' => 'err',
                'message' => '購買數量超過庫存，請聯絡客服',
            ];
            return $result;
        }elseif($req->add_qty < 1){
            $result = [
                'result' => 'err',
                'message' => '購買數量異常，請重新確認',
            ];
            return $result;
        }
        if(!Auth::check()){
            $result = [
                'result' => 'err',
                'message' => '尚未登入，請先登入',
            ];
            return $result;
        }
        ShoppingCart::create([
            'product_id' => $req->product_id,
            'user_id' => Auth::user()->id,
            'qty' => $req->add_qty,
        ]);
        $result = [
            'result' => 'success',
        ];
        return $result;
    }


}
