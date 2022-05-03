<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use App\Models\User;

class AccountController extends Controller
{
    //Same
    public function index() {
        $accountAry = User::get();
        $header = '會員管理-編輯頁';
        $slot = '';

        return view('hw_bootstrap.account.account', compact('accountAry', 'header', 'slot'));
    }

    public function create() {
        $header = '會員管理-編輯頁';
        $slot = '';
        return view('hw_bootstrap.account.create',compact('header', 'slot'));
    }

    public function store(Request $req) {

        // //輸入格式檢查 (Laravel內建方法)
        // $req->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        //使用 validator搭配 with
        $validator = Validator::make($req->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()) {
            return redirect('account/create')->with('problem', '輸入錯誤，請重新檢查');
        }

        $user = User::create([
            'name' => $req->acc_name,
            'email' => $req->acc_mail,
            'password' => Hash::make($req->acc_password),
            'power' => 1,
        ]);


        return redirect('/account')->with('success', '新增成功！');
    }

    //Same
    public function delete($target) {
        $account = User::find($target);

        $account->delete();

        return redirect('/account');
    }

    //Same
    public function edit($target) {
        $edited = User::find($target);
        $header = '會員管理-編輯頁';
        $slot = '';
        return view('hw_bootstrap.account.edit', compact('edited', 'header', 'slot'));
    }

    public function update($target, Request $req) {
        $user = User::find($target);

        $user->name = $req->acc_name;
        $user->power = $req->acc_power;

        if (Hash::needsRehash($req->acc_password)){
            $user->password = Hash::make($req->acc_password);
        }

        $user->save();

        return redirect('/account');
    }
}
