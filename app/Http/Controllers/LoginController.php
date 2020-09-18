<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request);
        $arr = [
            'username' => $request->code,
            'password' => $request->password,
        ];

        if ($request->remember == 'on') {
            $remember = true;
        } else {
            $remember = false;
        }
        // dd($remember);
        //kiểm tra trường remember có được chọn hay không

        if (Auth::attempt($arr, $remember)) {
            return redirect()->route('forum');
        }
        if (Auth::guard('admin')->attempt($arr, $remember)) {
            return redirect()->route('forum');
        }
        else{
            return redirect()->back()->with('error','MSSV hoặc mật khẩu chưa chính xác')->withInput();
        }
    }
    public function logout()
    {
        if(Auth::guard('admin')->check()){

            Auth::guard('admin')->logout();
        }
        else{

            Auth::logout();
        }
        return redirect('/dang-nhap');
    }
    public function form_login()
    {
        if(Auth::check() || Auth::guard('admin')->check()){
            return redirect()->route('forum');
        }
        return view('login.login'); 
    }
}
