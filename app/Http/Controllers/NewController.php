<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function msweb_func() {
        return view('msweb');
    }

    public function bsweb_login_func() {
        return view('hw_bootstrap.login');
    }


}


