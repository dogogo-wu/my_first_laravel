<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

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





}
