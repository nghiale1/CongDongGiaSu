<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Giasu;
use App\Models\Hocvien;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if ($request->remember == 'on') {
            $remember = true;
        } else {
            $remember = false;
        }
        if (Auth::attempt($arr, $remember)) {
            return redirect()->route('home');
        
        } else {
            $alert = "Sai tên tài khoản hoặc mật khẩu";
            return response()->json($alert, 400);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('account.login_view');
    }
    public function signup(Request $request)
    {
        // dd($request);
        $arr = [
            'username' => $request->username,
            'password' => $request->password
        ];
         
        $find=\DB::table('taikhoan')->where('username',$request->username)->first();
        if($find){
            $alert = "Tài khoản đã tồn tại";
            return response()->json($alert, 400);
        }
        else{
            if($request->role=='tutor'){
                $id_tk=\DB::table('taikhoan')->insertGetId([
                    'username'=>$request->username,
                    'password'=>$request->password,
                    'tk_quyen'=>'Giasu'
                ]);
                $gs = new Giasu;
                $gs->gs_hoten=$request->name;
                $gs->tk_id= $id_tk;
                $gs->gs_gioitinh=$request->gender;
                if($request->gender=='Nam'){
                    $gs->gs_hinhdaidien='client/svg/teacher_male.svg';
                }
                else{
                    $gs->gs_hinhdaidien='client/svg/teacher_female.svg';
                }
                $gs->save();
            }
            elseif($request->role=='student'){
                $id_tk=\DB::table('taikhoan')->insertGetId([
                    'username'=>$request->username,
                    'password'=>$request->password,
                    'tk_quyen'=>'Hocvien'
                ]);
                $hv = new Hocvien;
                $hv->hv_hoten=$request->name;
                $hv->hv_gioitinh=$request->gender;
                $hv->tk_id=$id_tk;
                if($request->gender=='Nam'){
                    
                    $hv->hv_hinhdaidien='client/svg/student_male.svg';
                }
                else{
                    $hv->hv_hinhdaidien='client/svg/student_female.svg';
                }
                $hv->save();
            }
            return redirect()->route('home');
            return response()->json('success', 200);
        }
    }
}
