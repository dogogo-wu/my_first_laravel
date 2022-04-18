<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    //
    public function bsweb_func() {
        return view('hw_bootstrap.index');
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
