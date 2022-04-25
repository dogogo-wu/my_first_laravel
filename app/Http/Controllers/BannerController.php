<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index() {
        $bannerAry = Banner::get();

        return view('hw_bootstrap.banner.banner', compact('bannerAry'));
    }

    public function create() {
        return view('hw_bootstrap.banner.create');
    }

    public function store(Request $req) {
        $path = Storage::disk('local')->put('public/banner', $req->banner_img);
        $path = str_replace('public', 'storage', $path);

        Banner::create([
            'img_path' => $path,
            'img_opacity' => $req->banner_opacity,
            'weight' => $req->img_weight,
        ]);

        return redirect('/banner');
    }

    public function delete($target) {
        $targetObj = Banner::where('id', $target)->first();

        $targetPath = str_replace('storage', 'public', $targetObj->img_path);
        Storage::disk('local')->delete($targetPath);

        $targetObj->delete();

        return redirect('/banner');
    }

    public function edit($target) {
        $edited = Banner::find($target);
        return view('hw_bootstrap.banner.edit', compact('edited'));
    }

    public function update($target, Request $req) {
        $targetObj = Banner::find($target);

        if($req->hasfile('banner_img')){
            $path = Storage::disk('local')->put('public/banner', $req->banner_img);
            $path = str_replace('public', 'storage', $path);

            $targetPath = str_replace('storage', 'public', $targetObj->img_path);
            Storage::disk('local')->delete($targetPath);
            $targetObj->img_path = $path;
        }

        $targetObj->img_opacity = $req->banner_opacity;
        $targetObj->weight = $req->img_weight;
        $targetObj->save();

        return redirect('/banner');
    }
}
