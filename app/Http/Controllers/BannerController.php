<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index() {
        // Test
        $bannerAry = Banner::orderBy('weight')->get();

        // $bannerAry = Banner::get();
        $header = 'Banner管理-編輯頁';
        $slot = '';

        return view('hw_bootstrap.banner.banner', compact('bannerAry', 'header', 'slot'));
    }

    public function create() {
        $header = 'Banner管理-編輯頁';
        $slot = '';
        return view('hw_bootstrap.banner.create',compact('header', 'slot'));
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
        $header = 'Banner管理-編輯頁';
        $slot = '';
        return view('hw_bootstrap.banner.edit', compact('edited', 'header', 'slot'));
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

    public function upmove($target) {

        // 取得目標obj
        $tarObj = Banner::find($target);
        // 若已經是最上面，直接return
        $tarWei = $tarObj->weight;
        if ($tarWei == 0) {
            return;
        }
        // 依weight小到大
        $weiAry = Banner::orderBy('weight')->get();
        // 找到前一個obj，
        $prevObj = $weiAry[$tarWei-1];
        // Swap order
        $tarObj -> weight -= 1;
        $prevObj -> weight += 1;
        // Save
        $tarObj->save();
        $prevObj->save();

        return redirect('/banner');
    }
    public function downmove($target) {

        // 取得目標obj
        $tarObj = Banner::find($target);
        // 取得max_index
        $max_index = Banner::count()-1;
        // 若已經是最下面，直接return
        $tarWei = $tarObj->weight;
        if ($tarWei == $max_index) {
            return;
        }
        // 依weight小到大
        $weiAry = Banner::orderBy('weight')->get();
        // 找到後一個obj，
        $postObj = $weiAry[$tarWei+1];
        // Swap order
        $tarObj -> weight += 1;
        $postObj -> weight -= 1;
        // Save
        $tarObj->save();
        $postObj->save();

        return redirect('/banner');

    }

}
