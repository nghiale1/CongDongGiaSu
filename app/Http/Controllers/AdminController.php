<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function monHoc()
    {
        $lv = \DB::table('linhvuc')->get();
        $monHoc = \DB::table('chuyenmon')
            ->leftjoin('linhvuc', 'linhvuc.lv_id', 'chuyenmon.cm_id')
            ->get();
        return view('admin.pages.monHoc', \compact('monHoc', 'lv'));
    }
    public function updateMonHoc(Request $request)
    {
        \DB::table('chuyenmon')->where('cm_id', $request->id)
            ->update([
                'cm_ten' => $request->name,
            ]);
        return response()->json('success', 200);
    }
    public function xoaMonHoc($id)
    {
        \DB::beginTransaction();
        try {
            \DB::table('chuyenmon')->where('cm_id', $id)
                ->delete();
            \DB::commit();
            return back()->with('success', 'Đã xoá thành công');

        } catch (\Exception $e) {
            \DB::rollback();
            \Log::debug($e);
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            \Log::debug($e);
            throw $e;
        }

    }
    public function addMonHoc(Request $request)
    {
        if ($request->linhvuc == 'none') {
            \DB::table('chuyenmon')->insert([
                'cm_ten' => $request->name,
            ]);
        } else {
            \DB::table('chuyenmon')->insert([
                'lv_id' => $request->linhvuc,
                'cm_ten' => $request->name,
            ]);

        }
        return back()->with('success', 'Thêm thành công');
    }
    public function tkGS()
    {

    }
    public function tkHV()
    {

    }
    public function tkLH()
    {

    }
    public function tkTT()
    {

    }
}
