<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $countGS = \DB::table('giasu')->count();
        $countHV = \DB::table('hocvien')->count();
        $countLH = \DB::table('lop')->count();
        $countGD = \DB::table('giaodich')->count();
        $tkgs = [];
        $tkhv = [];
        for ($i = 1; $i < 13; $i++) {
            $data = \DB::table('giasu')->whereMonth('gs_ngaytao', $i)->whereYear('gs_ngaytao', Date('Y'))->count();
            $data2 = \DB::table('hocvien')->whereMonth('hv_ngaytao', $i)->whereYear('hv_ngaytao', Date('Y'))->count();
            $tkgs[$i] = $data;
            $tkhv[$i] = $data2;
        }
        return view('admin.pages.index', compact('countGS', 'countGD', 'countLH', 'countHV', 'tkgs', 'tkhv'));
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
        $gs = \DB::table('giasu')->get();
        return view('admin.pages.tkGS', \compact('gs'));
    }
    public function tkGSChon(Request $request)
    {
        $gs = \DB::table('giasu')
            ->whereBetween('gs_ngaytao', [$request->from, $request->to])
            ->get();
        return view('admin.pages.tkGS', \compact('gs'));
    }
    public function tkHV()
    {
        $hv = \DB::table('hocvien')->get();
        return view('admin.pages.tkHV', \compact('hv'));
    }
    public function tkHVChon(Request $request)
    {
        $hv = \DB::table('hocvien')
            ->whereBetween('hv_ngaytao', [$request->from, $request->to])
            ->get();
        return view('admin.pages.tkHV', \compact('hv'));
    }
    public function tkLH()
    {
        $lh = \DB::table('lop')->get();
        return view('admin.pages.tkLH', \compact('lh'));
    }
    public function tkLHChon(Request $request)
    {
        $lh = \DB::table('lop')
            ->whereBetween('l_ngaytao', [$request->from, $request->to])
            ->get();
        return view('admin.pages.tkLH', \compact('lh'));
    }

    public function tkTT()
    {
        $tt = \DB::table('giaodich')
            ->join('hocvien', 'hocvien.hv_id', 'giaodich.gd_id')
            ->join('lop', 'lop.l_id', 'giaodich.l_id')
            ->where('gd_trangthai', 1)
            ->get();
        return view('admin.pages.tkTT', \compact('tt'));
    }
    public function tkTTChon(Request $request)
    {
        $tt = \DB::table('giaodich')
            ->join('hocvien', 'hocvien.hv_id', 'giaodich.gd_id')
            ->join('lop', 'lop.l_id', 'giaodich.l_id')
            ->where('gd_trangthai', 1)
            ->whereBetween('gd_ngaytao', [$request->from, $request->to])
            ->get();
        return view('admin.pages.tkTT', \compact('tt'));
    }
}
