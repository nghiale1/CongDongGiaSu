<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile(Request $request,$id)
    {
        $student=\DB::table('hocvien')->where('hv_id',$id)->first();
        $level=\DB::table('doituongnguoihoc')->get();
        return view('client.pages.account.student.profile',compact('student','level'));
    }
    public function updateWish(Request $request)
    {
        $id=\Auth::user()->hocviens[0]->hv_id;
        $student=\DB::table('hocvien')->where('hv_id',$id)
        ->update([
            'hv_uocmuon'=>$request->data
        ]);
        return redirect()->route('student.profile',$id);
    }
    public function updateBirth(Request $request)
    {
        $id=\Auth::user()->hocviens[0]->hv_id;
        $student=\DB::table('hocvien')->where('hv_id',$id)
        ->update([
            'hv_ngaysinh'=>$request->data
        ]);
        return redirect()->route('student.profile',$id);
    }
    public function updateLevel(Request $request)
    {
        $id=\Auth::user()->hocviens[0]->hv_id;
        $student=\DB::table('hocvien')->where('hv_id',$id)
        ->update([
            'hv_trinhdo'=>$request->data
        ]);
        return redirect()->route('student.profile',$id);
    }
    public function updatePower(Request $request)
    {
        $id=\Auth::user()->hocviens[0]->hv_id;
        $student=\DB::table('hocvien')->where('hv_id',$id)
        ->update([
            'hv_hocluc'=>$request->data
        ]);
        return redirect()->route('student.profile',$id);
    }
    public function updateSchool(Request $request)
    {
        $id=\Auth::user()->hocviens[0]->hv_id;
        $student=\DB::table('hocvien')->where('hv_id',$id)
        ->update([
            'hv_tentruong'=>$request->data
        ]);
        return redirect()->route('student.profile',$id);
    }
    public function rating(Request $request,$gs_id)
    {
        
    }
    public function tutorNear($id)
    {
        $student=\DB::table('hocvien')->where('hv_id',$id)->first();
        $level=\DB::table('doituongnguoihoc')->get();
        $loca=\DB::table('giasu')->get();
        return view('client.pages.account.student.map',compact('loca','student','level'));
    }
}
