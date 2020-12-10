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
    public function rating(Request $request,$l_id)
    {
        $hv_id=\Auth::user()->load('hocviens')->hocviens[0]->hv_id;
        \DB::table('danhgia')
        ->insert([
            'hv_id'=>$hv_id,
            'l_id'=>$l_id,
            'dg_xephang'=>$request->rating,
            'dg_noidung'=>$request->content
        ]);
        return back()->with('success','Đã đánh giá thành công');
    }
    public function tutorNear($id)
    {
        $student=\DB::table('hocvien')->where('hv_id',$id)->first();
        $level=\DB::table('doituongnguoihoc')->get();
        $loca=\DB::table('giasu')->get();
        return view('client.pages.account.student.map',compact('loca','student','level'));
    }
    public function store(Request $request,$gs_id)
    {
        $check=\DB::table('yeuthich')
        ->where('gs_id',$gs_id)
        ->where('tk_id',\Auth::id())
        ->first();
        if(!$check){
            \DB::table('yeuthich')->insert([
                'gs_id'=>$gs_id,
                'tk_id'=>\Auth::id()
            ]);
            return back()->with('success','Đã lưu gia sư vào danh sách yêu thích');
        }
        return back()->with('error','Gia sư đã có trong danh sách yêu thích');
        
    }
    public function destroy(Request $request,$gs_id)
    {
        $check=\DB::table('yeuthich')
        ->where('gs_id',$gs_id)
        ->where('tk_id',\Auth::id())
        ->first();
        if($check){
            \DB::table('yeuthich')->delete();
            return back()->with('success','Đã xoá gia sư khỏi danh sách yêu thích');
        }
        return back()->with('error','Gia sư không có trong danh sách yêu thích');
        
    }
    public function wishlist()
    {
        $yeuthich=\DB::table('yeuthich')->join('hocvien','hocvien.hv_id','yeuthich.hv_id')
        ->where('tk_id',\Auth::id())
        ->get();
        return view('client.pages.account.student.wishlist',compact('yeuthich'));
    }
}
