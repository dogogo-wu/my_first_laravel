<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index() {
        $bannerAry = Banner::orderBy('id', 'desc')->get();

        return view('hw_bootstrap.banner.banner', compact('bannerAry'));
    }

    public function create() {
        return view('hw_bootstrap.banner.create');
    }

    public function store(Request $req) {
        Banner::create([
            'img_path' => $req->banner_img,
            'img_opacity' => $req->banner_opacity,
            'weight' => $req->img_weight,
        ]);

        return redirect('/banner');
    }

    public function delete($target) {
        Banner::where('id', $target)->delete();
        return redirect('/banner');
    }

    public function edit($target) {
        $edited = Banner::find($target);
        return view('hw_bootstrap.banner.edit', compact('edited'));
    }

    public function update($target, Request $req) {
        Banner::where('id', $target)->update([
            'img_path' => $req->banner_img,
            'img_opacity' => $req->banner_opacity,
            'weight' => $req->img_weight,
        ]);

        return redirect('/banner');
    }
}
