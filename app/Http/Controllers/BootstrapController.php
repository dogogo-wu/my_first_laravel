<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BootstrapController extends Controller
{
    //
    public function bsweb_func() {
        // $data = DB::table('news')->get();
        // $data1 = DB::table('news')->orderBy('id')->take(3)->get();
        $data2 = DB::table('news')->orderBy('id', 'desc')->take(3)->get();
        // $data3 = DB::table('news')->inRandomOrder()->take(3)->get();

        // dd($data1, $data2, $data3);

        return view('hw_bootstrap.index', ['mydata' => $data2]);
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
}
