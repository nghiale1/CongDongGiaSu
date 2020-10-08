<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function get_linhvuc()
    {
        $linhvuc=\DB::table('linhvuc')->get();
        return response()->json($linhvuc, 200);
    }
    public function step1(Request $request)
    {
        
        $chuyenmon=\DB::table('chuyenmon')->where('lv_id',$request->linh_vuc)->get();
        $request->request->add(['lv' => $request->lv_id]);
        // dd($request);
        return view('client.pages.search.step1',\compact('chuyenmon','request'));
    }
    public function step2(Request $request){

        $request->request->add(['chuyen_mon' => ($request->chuyen_mon)]);
        $dtnh=\DB::table('doituongnguoihoc')->orderby('dtnh_id')->get();
        // dd($request);
        return view('client.pages.search.step2',\compact('dtnh','request'));
    }
   
    public function step3(Request $request)
    {
        // dd($request);
        $request->request->add(['chuyen_mon' => ($request->chuyen_mon)]);
        $request->request->add(['doi_tuong_nguoi_hoc' => ($request->doi_tuong_nguoi_hoc)]);
        $tgd=\DB::table('thoigianday')->orderby('tgd_id')->get();
        return view('client.pages.search.step3',\compact('tgd','request'));
    }
    public function match(Request $request)
    {
        // dd($request->ngay_thu);
        $find=\DB::table('chitietlichday as ld')
        ->join('giasu as gs','gs.gs_id','ld.gs_id')
        ->join('chitietchuyenmon as cm','cm.gs_id','gs.gs_id')
        ->select('gs.gs_id')
        ->where('cm_id',$request->chuyen_mon)
        // ->where('dtnh_id',$request->dtnh)
        ->wherein('ld.tgd_id',$request->ngay_thu)
        ->where('ld.ctld_trangthai','Ranh')
        ->groupby('gs.gs_id')
        ->get();
        // dd($find);
        $tutor=[];
        if($find->isNotEmpty()){
            foreach ($find as $key => $value) {
                $tutor[$key]=\DB::table('giasu')
                ->where('gs_id',$value->gs_id)->first();
                $tutor[$key]->descrip=\Str::limit($tutor[$key]->gs_gioithieu, 200, ' (...)');
            }
        }
        // dd($tutor);
        return view('client.pages.class.list_class',\compact('tutor'));

    }
    // https://www.wyzant.com/match/search?sort=1&d=20&sunday=true&gender_pref=none&st=1&ol=false&z=10001&from_form=true
    public function result($sort,$gender,$voice,$level)
    {
        return view('client.pages.class.list_class',\compact('tutor'));
    }
}
