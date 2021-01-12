<?php

namespace App\Http\Controllers;

use App\Models\Bangcap;
use App\Models\Chuyenmon;
use App\Models\Doituongnguoihoc;
use App\Models\Giasu;
use App\Models\Lop;
use App\Models\Truonghoc;

class PageController extends Controller
{
    public function index()
    {
        $chuyenmon = \DB::table('chuyenmon')->get();
        return view('client.pages.index', compact('chuyenmon'));
    }

    public function course($id)
    {
        $lop = Lop::join('giasu', 'giasu.gs_id', 'lop.gs_id')
            ->where('l_id', $id)->first();
        $countHV = Lop::join('giaodich', 'giaodich.l_id', 'lop.l_id')
            ->where('lop.l_id', $id)
            ->count();
        $tutor = Giasu::where('gs_id', $lop->gs_id)->first();
        $buoihoc = \DB::table('loptgd')
            ->join('thoigianday', 'thoigianday.tgd_id', 'loptgd.tgd_id')
            ->where('loptgd.l_id', $id)
            ->get();
        $tmlop = \DB::table('thumuclop')
            ->where('l_id', $id)
            ->where('tml_tmid', null)
            ->first();
        $folder = [];
        $countFilde = 0;
        if ($tmlop) {

            $folder = \DB::table('thumuclop')
                ->where('l_id', $id)
                ->where('tml_tmid', $tmlop->tml_id)
                ->get();
            foreach ($folder as $key => $value) {
                $value->taptin = \DB::table('taptinlop')->where('tml_id', $value->tml_id)->get();
                if ($value->taptin->isNotEmpty()) {
                    foreach ($value->taptin as $key2 => $value2) {
                        $value2->ttl_kichthuoc = $this->formatSize($value2->ttl_kichthuoc);
                    }
                    $countFilde += count($value->taptin);
                }
            }
        }
        $temp = 0;
        $minute = 0;
        $second = 0;
        $video = \DB::table('video')
            ->where('video.l_id', $id)
            ->get();

        foreach ($video as $key => $value) {
            $arr = (explode(':', $value->v_dodai));
            $second += (int) $arr[0] * 60;
            $second += (int) $arr[1];

        }
        $temp += count($video);

        $danhgia = \DB::table('danhgia')
            ->join('hocvien', 'hocvien.hv_id', 'danhgia.hv_id')
            ->where('l_id', $id)
            ->get();
        $dem = [
            'tong' => 0,
            'dem' => [
                'trungbinh' => 0,
                'nam' => 0,
                'bon' => 0,
                'ba' => 0,
                'hai' => 0,
                'mot' => 0,
            ],
            'phantram' => [
                // 'trungbinh' => 0,
                'nam' => 0,
                'bon' => 0,
                'ba' => 0,
                'hai' => 0,
                'mot' => 0,
            ],
        ];

        foreach ($danhgia as $key => $value) {
            switch ($value->dg_xephang) {
                case 1:
                    $dem['tong']++;
                    $dem['dem']['mot']++;
                    break;
                case 2:
                    $dem['tong']++;
                    $dem['dem']['hai']++;
                    break;
                case 3:
                    $dem['tong']++;
                    $dem['dem']['ba']++;
                    break;
                case 4:
                    $dem['tong']++;
                    $dem['dem']['bon']++;
                    break;
                case 5:
                    $dem['tong']++;
                    $dem['dem']['nam']++;
                    break;
            }
        }
        if ($dem['tong'] != 0) {

            $dem['dem']['trungbinh'] = (($dem['dem']['mot'] * 1) + ($dem['dem']['hai'] * 2) + ($dem['dem']['ba'] * 3) + ($dem['dem']['bon'] * 4) + ($dem['dem']['nam'] * 5)) / $dem['tong'];

            $dem['phantram']['nam'] = $dem['dem']['mot'] * 100 / $dem['tong'];
            $dem['phantram']['bon'] = $dem['dem']['bon'] * 100 / $dem['tong'];
            $dem['phantram']['ba'] = $dem['dem']['ba'] * 100 / $dem['tong'];
            $dem['phantram']['hai'] = $dem['dem']['hai'] * 100 / $dem['tong'];
            $dem['phantram']['mot'] = $dem['dem']['mot'] * 100 / $dem['tong'];
        }
        // $dem['phantram']['trungbinh'] = ($dem['phantram']['nam'] + $dem['phantram']['bon'] + $dem['phantram']['ba'] + $dem['phantram']['hai'] + $dem['phantram']['mot']) / 5;
        // dd($dem);
        $lop->danhgia = $dem;
        $countVideo = $temp;
        $minute = round($second / 60, 0, PHP_ROUND_HALF_DOWN);
        $second = $second % 60;
        $tutor->danhgia = $this->getRatingGS($tutor->gs_id);
        $tutor->lopDaDay = $this->getClassTeached($tutor->gs_id);
        $suggestion = $this->suggestionClass($id, $tutor->gs_id);
        return view('client.pages.class.intro', compact('lop', 'folder', 'buoihoc', 'countFilde', 'video', 'tutor', 'countHV', 'minute', 'second', 'countVideo', 'suggestion', 'danhgia'));
    }
    public function suggestionClass($id, $gs_id)
    {
        $class = \DB::table('lop')
            ->where('lop.gs_id', $gs_id)
            ->where('lop.l_id', '!=', $id)
            ->orderBy('lop.l_ngaybatdau', 'desc')
            ->get()
            ->take(4);
        foreach ($class as $key => $value) {
            $hv = \DB::table('hopdong')
                ->where('hopdong.l_id', $value->l_id)
                ->get();
            $value->slhv = count($hv);
            $value->thoigian = $this->getDuration($value->l_id);
        }
        // dd($class);
        return $class;
    }
    public function getDuration($l_id)
    {
        $temp = 0;
        $minute = 0;
        $second = 0;
        $video = \DB::table('video')
            ->where('video.l_id', $l_id)
            ->get();

        foreach ($video as $key => $value) {
            $arr = (explode(':', $value->v_dodai));
            $second += (int) $arr[0] * 60;
            $second += (int) $arr[1];

        }

        $temp += count($video);

        $countVideo = $temp;
        $minute = round($second / 60, 0, PHP_ROUND_HALF_DOWN);
        $second = $second % 60;
        $time = $minute . ':' . $second;
        return $time;
    }
    public function getRatingGS($gs_id)
    {
        $danhgia = \DB::table('giasu')
            ->join('lop', 'lop.gs_id', 'lop.gs_id')
            ->join('danhgia', 'danhgia.l_id', 'lop.l_id')
            ->where('giasu.gs_id', $gs_id)
            ->select('danhgia.*')
            ->get();
        // dd($danhgia);
        $dem = [
            'tong' => 0,
            'dem' => [
                'trungbinh' => 0,
                'nam' => 0,
                'bon' => 0,
                'ba' => 0,
                'hai' => 0,
                'mot' => 0,
            ],
            'phantram' => [
                // 'trungbinh' => 0,
                'nam' => 0,
                'bon' => 0,
                'ba' => 0,
                'hai' => 0,
                'mot' => 0,
            ],
        ];
        if ($danhgia->isNotEmpty()) {

        }
        foreach ($danhgia as $key => $value) {
            switch ($value->dg_xephang) {
                case 1:
                    $dem['tong']++;
                    $dem['dem']['mot']++;
                    break;
                case 2:
                    $dem['tong']++;
                    $dem['dem']['hai']++;
                    break;
                case 3:
                    $dem['tong']++;
                    $dem['dem']['ba']++;
                    break;
                case 4:
                    $dem['tong']++;
                    $dem['dem']['bon']++;
                    break;
                case 5:
                    $dem['tong']++;
                    $dem['dem']['nam']++;
                    break;
            }
            $dem['dem']['trungbinh'] = (($dem['dem']['mot'] * 1) + ($dem['dem']['hai'] * 2) + ($dem['dem']['ba'] * 3) + ($dem['dem']['bon'] * 4) + ($dem['dem']['nam'] * 5)) / $dem['tong'];

            $dem['phantram']['nam'] = $dem['dem']['mot'] * 100 / $dem['tong'];
            $dem['phantram']['bon'] = $dem['dem']['bon'] * 100 / $dem['tong'];
            $dem['phantram']['ba'] = $dem['dem']['ba'] * 100 / $dem['tong'];
            $dem['phantram']['hai'] = $dem['dem']['hai'] * 100 / $dem['tong'];
            $dem['phantram']['mot'] = $dem['dem']['mot'] * 100 / $dem['tong'];
        }

        return $dem;

    }
    public function getClassTeached($gs_id)
    {
        $dem = \DB::table('lop')->where('gs_id', $gs_id)->count();
        return $dem;
    }
    public function tutor($id)
    {
        $tutor = Giasu::where('gs_id', $id)->first();
        $tutor->solop = \DB::table('lop')->where('gs_id', $tutor->gs_id)->count();
        $school = Truonghoc::where('gs_id', $id)->get();
        $degree = Bangcap::where('gs_id', $id)->get();
        $listClass = Lop::join('giasu', 'giasu.gs_id', 'lop.gs_id')
            ->where('lop.gs_id', $id)->limit(3)->get();

        $mySubject = \DB::table('chitietchuyenmon')->join('chuyenmon', 'chuyenmon.cm_id', 'chitietchuyenmon.cm_id')
            ->leftjoin('linhvuc', 'linhvuc.lv_id', 'chuyenmon.lv_id')
            ->join('doituongnguoihoc', 'doituongnguoihoc.dtnh_id', 'chitietchuyenmon.dtnh_id')
            ->where('chitietchuyenmon.gs_id', $id)->get();
        // dd($mySubject);

        $subject = Chuyenmon::leftjoin('linhvuc', 'linhvuc.lv_id', 'chuyenmon.lv_id')->
            orderby('lv_ten', 'ASC')->get();
        $obj = Doituongnguoihoc::get();

        $schedule = \DB::table('thoigianday')
            ->join('chitietlichday', 'chitietlichday.tgd_id', 'thoigianday.tgd_id')
            ->where('chitietlichday.gs_id', $tutor->gs_id)
            ->get();
        foreach ($schedule as $key => $value) {
            $lop = \DB::table('loptgd')
                ->join('lop', 'lop.l_id', 'loptgd.l_id')
                ->where('loptgd.tgd_id', $value->tgd_id)
                ->where('lop.gs_id', $tutor->gs_id)
                ->get();
            $value->lop = $lop;
        }
        $tutor->danhgia = $this->getRatingGS($tutor->gs_id);

        $loca = \json_encode(\DB::table('giasu')->get());
        // dd($tutor->chitietlichdays);
        return view('client.pages.account.tutor.profile', compact('tutor', 'school', 'degree', 'subject', 'obj', 'mySubject', 'loca', 'schedule', 'listClass'));

    }
}
