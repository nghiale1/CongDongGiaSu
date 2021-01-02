<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }
    public function newReport()
    {
        $report = \DB::table('baocao')
            ->join('lop', 'lop.l_id', 'baocao.l_id')
            ->join('giasu', 'giasu.gs_id', 'lop.gs_id')
            ->join('hocvien', 'hocvien.hv_id', 'baocao.hv_id')
            ->where('bc_trangthai', 0)->get();
        return view('admin.pages.report.newReport', compact('report'));
    }
    public function report()
    {
        $report = \DB::table('baocao')
            ->join('lop', 'lop.l_id', 'baocao.l_id')
            ->join('hocvien', 'hocvien.hv_id', 'baocao.hv_id')
            ->where('bc_trangthai', 1)
            ->orwhere('bc_trangthai', 2)
            ->get();
        return view('admin.pages.report.report', compact('report'));
    }
    public function protectCourse($bc_id)
    {
        \DB::table('baocao')
            ->where('bc_id', $bc_id)
            ->update([
                'bc_trangthai' => 2,
            ]);
        return back()->with('success', 'Đã vô hiệu báo cáo');
    }
    public function removeCourse($l_id)
    {
        \DB::table('lop')
            ->where('l_id', $l_id)
            ->delete();
        return back()->with('success', 'Đã vô hiệu khoá học');
    }
}
