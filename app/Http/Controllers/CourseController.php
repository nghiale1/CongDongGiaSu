<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function suggestion(Request $request)
    {
        $goiy = [];
        $yeuthich = \DB::table('yeuthich')
            ->join('giasu', 'giasu.gs_id', 'yeuthich.gs_id')
            ->join('lop', 'lop.gs_id', 'giasu.gs_id')
            ->join('giaodich', 'giaodich.l_id', 'lop.l_id')
            ->where('yeuthich.tk_id', \Auth::id())
            ->orderBy('lop.l_ngaybatdau', 'desc')
            ->take(8)
            ->get();
        // chưa đủ 5 khoá học

        // lấy lớp khác
        $goiy = \DB::table('lop')
            ->join('giasu', 'giasu.gs_id', 'lop.gs_id')
        // ->join('chitietchuyenmon', 'giasu.gs_id', 'chitietchuyenmon.gs_id')
        // ->orderBy('lop.l_ngaybatdau', 'desc')
            ->take(8)
            ->get();
        // dd($goiy);

        $student = \DB::table('hocvien')->where('tk_id', \Auth::id())->first();

        return view('client.pages.account.student.suggestion', compact('yeuthich', 'goiy', 'student'));
    }
    public function a(Request $request)
    {
        return view('client.pages.account.student.suggestion', compact());
    }
    public function b(Request $request)
    {
        return view('client.pages.account.student.suggestion', compact());
    }
    public function v(Request $request)
    {
        return view('client.pages.account.student.suggestion', compact());
    }
    public function c(Request $request)
    {
        return view('client.pages.account.student.suggestion', compact());
    }
    public function aa(Request $request)
    {
        return view('client.pages.account.student.suggestion', compact());
    }
    public function report(Request $request)
    {
        if ($request->content != "") {

            \DB::table('baocao')->insert([
                'bc_noidung' => $request->content,
                'hv_id' => \Auth::user()->hocviens[0]->hv_id,
                'l_id' => $request->l_id,
            ]);
            return back()->with('success', 'Đã báo cáo với quản trị viên');
        }
    }
}
