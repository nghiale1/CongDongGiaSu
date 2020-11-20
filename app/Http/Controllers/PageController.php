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
        $lop=Lop::join('giasu','giasu.gs_id','lop.gs_id')
        ->where('l_id',$id)->first();
        $countHV=Lop::join('hopdong','hopdong.l_id','lop.l_id')
        ->where('lop.l_id',$id)
        ->count();
        $tutor=Giasu::where('gs_id',$lop->gs_id)->first();

        $lesson=\DB::table('chuong')
        ->where('chuong.l_id',$lop->l_id)
        ->get();
        $temp=0;
        $minute=0;
        $second=0;
        foreach($lesson as $item){
            $video=\DB::table('video')
            ->where('video.c_id',$item->c_id)
            ->get();
            $item->video=$video;



            foreach ($video as $key => $value) {
                $arr=(explode(':', $value->v_dodai));
                    $second+=(int)$arr[0]*60;
                    $second+=(int)$arr[1];




            }


            $temp+=count($video);
        }
        $countVideo=$temp;
        $minute=round($second/60,0,PHP_ROUND_HALF_DOWN);
        $second=$second%60;

        $suggestion=$this->suggestionClass($id,$tutor->gs_id);
        // dd($suggestion);
        // dd($minute);
        return view('client.pages.class.intro',compact('lop','tutor','countHV','lesson','minute','second','countVideo','suggestion'));
    }
    public function suggestionClass($id,$gs_id)
    {
        $class=\DB::table('lop')
        ->where('lop.gs_id',$gs_id)
        ->where('lop.l_id','!=',$id)
        ->orderBy('lop.l_ngaybatdau','desc')
        ->get()
        ->take(4);
        foreach ($class as $key => $value) {
            $hv=\DB::table('hopdong')
            ->where('hopdong.l_id',$value->l_id)
            ->get();
            $value->slhv=count($hv);
            $value->thoigian=$this->getDuration($value->l_id);
        }
        // dd($class);
        return $class;
    }
    public function getDuration($l_id)
    {
        $lesson=\DB::table('chuong')
        ->where('chuong.l_id',$l_id)
        ->get();
        $temp=0;
        $minute=0;
        $second=0;
        foreach($lesson as $item){
            $video=\DB::table('video')
            ->where('video.c_id',$item->c_id)
            ->get();
            $item->video=$video;



            foreach ($video as $key => $value) {
                $arr=(explode(':', $value->v_dodai));
                    $second+=(int)$arr[0]*60;
                    $second+=(int)$arr[1];




            }


            $temp+=count($video);
        }
        $countVideo=$temp;
        $minute=round($second/60,0,PHP_ROUND_HALF_DOWN);
        $second=$second%60;
        $time=$minute.':'.$second;
        return $time;
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
        
        $schedule=\DB::table('thoigianday')
        ->join('chitietlichday','chitietlichday.tgd_id','thoigianday.tgd_id')
        ->where('chitietlichday.gs_id',$tutor->gs_id)
        ->get();
        foreach ($schedule as $key => $value) {
            $lop=\DB::table('loptgd')
            ->join('lop','lop.l_id','loptgd.l_id')
            ->where('loptgd.tgd_id',$value->tgd_id)
            ->where('lop.gs_id',$tutor->gs_id)
            ->get();
            $value->lop=$lop;
        }
        


        $loca=\json_encode(\DB::table('giasu')->get());
        // dd($tutor->chitietlichdays);
        return view('client.pages.account.tutor.profile',compact('tutor','school','degree','subject','obj','mySubject','loca','schedule'));

    }
}
