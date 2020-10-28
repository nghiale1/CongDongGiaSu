<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lop;
use App\Models\Giasu;
use App\Models\Truonghoc;
use App\Models\Bangcap;
use App\Models\Chuyenmon;
use App\Models\Doituongnguoihoc;
class PageController extends Controller
{
    public function index()
    {
        $linhvuc=\DB::table('linhvuc')->get();
        return view('client.pages.index',compact('linhvuc'));
    }
    public function course($id)
    {
        // $lop=Lop::find($id)->load('giasu');
        return view('client.pages.account.tutor.intro',compact('lop'));
    }
    public function tutor($id)
    {
        $tutor=Giasu::where('gs_id',$id)->first();
        $tutor->solop=\DB::table('lop')->where('gs_id',$tutor->gs_id)->count();
        $school=Truonghoc::where('gs_id',$id)->get();
        $degree=Bangcap::where('gs_id',$id)->get();

        $mySubject=\DB::table('chitietchuyenmon')->join('chuyenmon','chuyenmon.cm_id','chitietchuyenmon.cm_id')
        ->leftjoin('linhvuc','linhvuc.lv_id','chuyenmon.lv_id')
        ->join('doituongnguoihoc','doituongnguoihoc.dtnh_id','chitietchuyenmon.dtnh_id')
        ->where('chitietchuyenmon.gs_id',$id)->get();
        // dd($mySubject);

        $subject=Chuyenmon::leftjoin('linhvuc','linhvuc.lv_id','chuyenmon.lv_id')->
        orderby('lv_ten','ASC')->get();
        $obj=Doituongnguoihoc::get();



        $loca=\json_encode(\DB::table('giasu')->get());
        // dd($tutor->chitietlichdays);
        return view('client.pages.account.tutor.profile',compact('tutor','school','degree','subject','obj','mySubject','loca'));

    }
}
