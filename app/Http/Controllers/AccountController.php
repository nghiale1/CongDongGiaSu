<?php

namespace App\Http\Controllers;

use App\Models\Giasu;
use App\Models\Hocvien;
use Auth;
use Illuminate\Http\Request;

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
            $role = \DB::table('taikhoan')
                ->join('giasu', 'giasu.tk_id', 'taikhoan.tk_id')
                ->where('username', $arr['username'])->first();

            if ($role->tk_quyen == 'HocVien') {

                return redirect()->route('home');
            }
            if ($role->tk_quyen == 'GiaSu') {

                return redirect()->route('tutor.profile', $role->gs_id);
            }
            if ($role->tk_quyen == 'Admin') {

                return redirect()->route('dashboard.index');
            }

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
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        $find = \DB::table('taikhoan')->where('username', $request->username)->first();
        if ($find) {
            $alert = "Tên tài khoản đã tồn tại";
            return response()->json($alert, 400);
        } else {
            \DB::beginTransaction();
            try {
                if ($request->role == 'tutor') {
                    $id_tk = \DB::table('taikhoan')->insertGetId([
                        'username' => $request->username,
                        'password' => \Hash::make($request->password),
                        'tk_quyen' => 'GiaSu',
                    ]);
                    $gs = new Giasu;
                    $gs->gs_hoten = $request->name;
                    $gs->tk_id = $id_tk;
                    $gs->gs_gioitinh = $request->gender;
                    if ($request->gender == 'Nam') {
                        $gs->gs_hinhdaidien = 'client/svg/teacher_male.svg';
                    } else {
                        $gs->gs_hinhdaidien = 'client/svg/teacher_female.svg';
                    }
                    $gs->save();
                    $ctcm_id = \DB::table('chitietchuyenmon')->insertGetId([
                        'gs_id' => $gs->gs_id,
                        'cm_id' => $request->cm_id,
                        'dtnh_id' => $request->dtnh_id,
                    ]);
                    $info = \DB::table('chitietchuyenmon')
                        ->join('chuyenmon', 'chuyenmon.cm_id', 'chitietchuyenmon.cm_id')
                        ->join('doituongnguoihoc', 'doituongnguoihoc.dtnh_id', 'chitietchuyenmon.dtnh_id')
                        ->where('chitietchuyenmon.ctcm_id', $ctcm_id)
                        ->first();
                    \DB::table('thumucgs')->insert([
                        'gs_id' => $gs->gs_id,
                        'ctcm_id' => $ctcm_id,
                        'tmgs_duongdancha' => 'tai-lieu-gia-su/' . $gs->gs_id,
                        'tmgs_duongdan' => 'tai-lieu-gia-su/' . $gs->gs_id . '/' . \Str::slug($info->cm_ten . '-' . $info->dtnh_ten),
                        'tmgs_slug' => \Str::slug($info->cm_ten . '-' . $info->dtnh_ten),
                        'tmgs_ten' => $info->cm_ten . '-' . $info->dtnh_ten,
                    ]);
                    for ($i = 1; $i <= 21; $i++) {
                        \DB::table('chitietlichday')->insert([
                            'tgd_id' => $i,
                            'ctld_trangthai' => 'Ranh',
                            'gs_id' => $gs->gs_id,
                        ]);
                    }
                } elseif ($request->role == 'student') {
                    $id_tk = \DB::table('taikhoan')->insertGetId([
                        'username' => $request->username,
                        'password' => \Hash::make($request->password),
                        'tk_quyen' => 'HocVien',
                    ]);
                    $hv = new Hocvien;
                    $hv->hv_hoten = $request->name;
                    $hv->hv_gioitinh = $request->gender;
                    $hv->tk_id = $id_tk;
                    if ($request->gender == 'Nam') {

                        $hv->hv_hinhdaidien = 'client/svg/student_male.svg';
                    } else {
                        $hv->hv_hinhdaidien = 'client/svg/student_female.svg';
                    }
                    $hv->save();

                    // thumuchocvien
                    $tmhv_id = \DB::table('thumuchv')->max('tmhv_id');
                    if (!$tmhv_id) {
                        $tmhv_id = 0;
                    }
                    \DB::table('thumuchv')->insert([
                        'tmhv_ten' => $hv->hv_hoten,
                        'tmhv_slug' => \Str::slug($hv->hv_ten . '.' . ($tmhv_id + 1)),
                        'tmhv_duongdan' => 'tai-lieu-hoc-vien/' . ($tmhv_id + 1),
                        'hv_id' => $hv->hv_id,
                    ]);
                }
                \DB::commit();
                return redirect()->route('account.login_view');
            } catch (\Exception $e) {
                \DB::rollback();
                \Log::debug($e);
                throw $e;
            } catch (\Throwable $e) {
                \DB::rollback();
                \Log::debug($e);
                throw $e;
            }

            return response()->json('success', 200);
        }
    }
    public function register()
    {
        $cm = \DB::table('chuyenmon')->leftjoin('linhvuc', 'linhvuc.lv_id', 'chuyenmon.lv_id')->get();
        $dtnh = \DB::table('doituongnguoihoc')->get();
        return view('client.pages.account.register', compact('cm', 'dtnh'));
    }
}
