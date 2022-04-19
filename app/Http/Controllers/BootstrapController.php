<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BootstrapController extends Controller
{
    //
    public function bsweb_func() {

        // $mydataAry = DB::table('news')->orderBy('id', 'desc')->take(3)->get();
        // $mydataAry = DB::table('news')->take(3)->get();
        $mydataAry = DB::table('news')->inRandomOrder()->take(3)->get();

        return view('hw_bootstrap.index', compact('mydataAry'));
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
        return view('hw_bootstrap.comment');
    }

    public function comment_save_func(Request $req) {
        dd($req->all());
    }



}
