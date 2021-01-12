<?php

namespace App\Http\Controllers;

use App\Models\Lop;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function get_linhvuc()
    {
        $linhvuc = \DB::table('linhvuc')->get();
        return response()->json($linhvuc, 200);
    }
    public function step1(Request $request)
    {

        $chuyenmon = \DB::table('chuyenmon')->where('lv_id', $request->linh_vuc)->get();
        $request->request->add(['lv' => $request->lv_id]);
        // dd($request);
        return view('client.pages.search.step1', \compact('chuyenmon', 'request'));
    }
    public function step2(Request $request)
    {

        $request->request->add(['chuyen_mon' => ($request->chuyen_mon)]);
        $dtnh = \DB::table('doituongnguoihoc')->orderby('dtnh_id')->get();
        // dd($request);
        return view('client.pages.search.step2', \compact('dtnh', 'request'));
    }

    public function step3(Request $request)
    {
        // dd($request);
        $request->request->add(['chuyen_mon' => ($request->chuyen_mon)]);
        $request->request->add(['doi_tuong_nguoi_hoc' => ($request->doi_tuong_nguoi_hoc)]);
        $tgd = \DB::table('thoigianday')->orderby('tgd_id')->get();
        return view('client.pages.search.step3', \compact('tgd', 'request'));
    }
    public function match(Request $request)
    {
        $search = "";
        if ($request->doi_tuong_nguoi_hoc) {
            $request->level = $request->doi_tuong_nguoi_hoc;
            $keySearch['level'] = $request->doi_tuong_nguoi_hoc;
        }
        if ($request->ngay_thu) {
            $keySearch['schedule'] = $request->ngay_thu;
            $request->schedule = $request->ngay_thu;
        }
        $tutor = Lop::query();
        $keySearch['gender'] = "";
        $keySearch['sort'] = 1;
        $keySearch['voice'] = ['Bắc', 'Trung', 'Nam'];
        $keySearch['schedule'] = [];
        $keySearch['level'] = [];

        $tutor = $tutor
            ->join('giasu', 'giasu.gs_id', 'lop.l_id')
            ->get();
        if ($request->chuyen_mon) {
            foreach ($tutor as $key2 => $value2) {
                $f = \DB::table('chitietchuyenmon')
                    ->join('chuyenmon', 'chuyenmon.cm_id', 'chitietchuyenmon.cm_id')
                    ->where('gs_id', $value2->gs_id)
                    ->where('chuyenmon.cm_ten', $request->chuyen_mon)
                    ->first();
                if (!$f) {
                    unset($tutor[$key2]);
                }
            }
            $search = $request->chuyen_mon;
        } else if ($search != '') {
            foreach ($tutor as $key2 => $value2) {
                $f = \DB::table('chitietchuyenmon')
                    ->join('chuyenmon', 'chuyenmon.cm_id', 'chitietchuyenmon.cm_id')
                    ->where('gs_id', $value2->gs_id)
                    ->where('chuyenmon.cm_ten', $search)
                    ->first();
                if (!$f) {
                    unset($tutor[$key2]);
                }
            }
        }
        if ($request->voice) {
            $tutor = $tutor->whereIn('gs_giongnoi', $request->voice);
            $keySearch['voice'] = $request->voice;
        }
        // thứ dạy
        if ($request->schedule) {
            foreach ($request->schedule as $key => $value) {
                $keySearch['schedule'][$key] = intval($value);
            }
            foreach ($keySearch['schedule'] as $key => $value) {
                foreach ($tutor as $key2 => $value2) {
                    $f = \DB::table('loptgd')
                        ->where('l_id', $value2->l_id)
                        ->where('loptgd.tgd_id', $value)
                        ->first();
                    if (!$f) {
                        unset($tutor[$key2]);
                    }
                }
            }
        }
        // lưu ý
        if ($request->level) {
            if ($request->level != 19) {

                foreach ($tutor as $key2 => $value2) {
                    $f = \DB::table('chitietchuyenmon')
                        ->where('gs_id', $value2->gs_id)
                        ->where('dtnh_id', $request->level)
                        ->first();
                    if (!$f) {
                        unset($tutor[$key2]);
                    }
                }
            }
            $keySearch['level'] = $request->level;
        }
        if ($request->gender) {
            $tutor = $tutor->where('gs_gioitinh', $request->gender);
            $keySearch['gender'] = $request->gender;
        }

        foreach ($tutor as $key => $value) {
            $value->descrip = \Str::limit($value->gs_gioithieu, 200, ' (...)');
            $value->danhgia = $this->getRatingGS($value->gs_id);
            $value->lopDaDay = $this->getClassTeached($value->gs_id);
        }
        // dd($tutor);
        if ($request->sort) {
            switch ($request->sort) {
                // phù hợp
                case '1':
                    $tutor = $tutor->sortBy(function ($item) {
                        return $item->gs_hoten;
                    })->values();
                    break;
                //thấp tới cao
                case '2':
                    $tutor = $tutor->sortBy(function ($item) {
                        return $item->gs_mucluong;
                    })->values();
                    break;
                // cao tới thấp
                case '3':
                    $tutor = $tutor->sortByDesc(function ($item) {
                        return $item->gs_mucluong;
                    })->values();
                    break;
                // đánh giá
                case '4':
                    $tutor = $tutor->sortBy(function ($item) {
                        return $item->danhgia['dem']['trungbinh'];
                    })->values();

                    break;

                default:
                    $keySearch['sort'] = $request->sort;
                    break;
            }
            $keySearch['sort'] = $request->sort;
        }
        return view('client.pages.class.list_class2', \compact('tutor', 'search', 'keySearch'));

    }
    public function search(Request $request)
    {
        $tutor = Lop::query();
        $search = $request->search;
        $keySearch['gender'] = "";
        $keySearch['sort'] = 1;
        $keySearch['voice'] = ['Bắc', 'Trung', 'Nam'];
        $keySearch['schedule'] = [];
        $keySearch['level'] = [];
        $keyword = '%' . $request->search . '%';

        $tutor = $tutor
            ->join('giasu', 'giasu.gs_id', 'lop.gs_id')
            ->select('giasu.*', 'lop.*')
            ->orwhere('lop.l_ten', 'like', $keyword)
            ->orwhere('giasu.gs_hoten', 'like', $keyword)
            ->groupby('giasu.gs_id')
            ->get();
        // dd($tutor);
        if ($request->voice) {
            $tutor = $tutor->whereIn('gs_giongnoi', $request->voice);
            $keySearch['voice'] = $request->voice;
        }
        // thứ dạy
        if ($request->schedule) {
            foreach ($request->schedule as $key => $value) {
                $keySearch['schedule'][$key] = intval($value);
            }
            foreach ($keySearch['schedule'] as $key => $value) {
                foreach ($tutor as $key2 => $value2) {
                    $f = \DB::table('loptgd')
                        ->where('l_id', $value2->l_id)
                        ->where('loptgd.tgd_id', $value)
                        ->first();
                    if (!$f) {
                        unset($tutor[$key2]);
                    }
                }
            }
        }
        // lưu ý
        if ($request->level) {
            if ($request->level != 19) {

                foreach ($tutor as $key2 => $value2) {
                    $f = \DB::table('chitietchuyenmon')
                        ->where('gs_id', $value2->gs_id)
                        ->where('dtnh_id', $request->level)
                        ->first();
                    if (!$f) {
                        unset($tutor[$key2]);
                    }
                }
            }
            $keySearch['level'] = $request->level;
        }
        if ($request->gender) {
            $tutor = $tutor->where('gs_gioitinh', $request->gender);
            $keySearch['gender'] = $request->gender;
        }

        foreach ($tutor as $key => $value) {
            $value->descrip = \Str::limit($value->gs_gioithieu, 200, ' (...)');
            $value->danhgia = $this->getRatingGS($value->gs_id);
            $value->lopDaDay = $this->getClassTeached($value->gs_id);
        }
        // dd($tutor);
        if ($request->sort) {
            switch ($request->sort) {
                // phù hợp
                case '1':
                    $tutor = $tutor->sortBy(function ($item) {
                        return $item->gs_hoten;
                    })->values();
                    break;
                //thấp tới cao
                case '2':
                    $tutor = $tutor->sortBy(function ($item) {
                        return $item->gs_mucluong;
                    })->values();
                    break;
                // cao tới thấp
                case '3':
                    $tutor = $tutor->sortByDesc(function ($item) {
                        return $item->gs_mucluong;
                    })->values();
                    break;
                // đánh giá
                case '4':
                    $tutor = $tutor->sortBy(function ($item) {
                        return $item->danhgia['dem']['trungbinh'];
                    })->values();

                    break;

                default:
                    $keySearch['sort'] = $request->sort;
                    break;
            }
            $keySearch['sort'] = $request->sort;
        }
        return view('client.pages.class.list_class', \compact('tutor', 'search', 'keySearch'));

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

        return $dem;

    }
    public function getClassTeached($gs_id)
    {
        $dem = \DB::table('lop')->where('gs_id', $gs_id)->count();
        return $dem;
    }
    // https://www.wyzant.com/match/search?sort=1&d=20&sunday=true&gender_pref=none&st=1&ol=false&z=10001&from_form=true
    public function result($sort, $gender, $voice, $level)
    {
        return view('client.pages.class.list_class', \compact('tutor'));
    }
}
