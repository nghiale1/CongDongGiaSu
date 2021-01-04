<?php

namespace App\Http\Controllers;

use App\Models\Giasu;
use DB;
use GetId3;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function changeStatusSchedule(Request $request)
    {
        if ($request->type == 'free') {
            $status = 'Ban';
        } else {
            $status = 'Ranh';
        }
        try {
            //code...
            \DB::table('chitietlichday')
                ->where('gs_id', \Auth::user()->giasus[0]->gs_id)
                ->where('tgd_id', $request->id + 1)
                ->update([
                    'ctld_trangthai' => $status,
                ]);
            return response()->json('success', 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 500);
        }
    }
    public function changeIntro(Request $request)
    {

        try {
            //code...
            \DB::table('giasu')
                ->where('gs_id', \Auth::user()->giasus[0]->gs_id)
                ->update([
                    'gs_gioithieu' => $request->data,
                ]);
            return response()->json($request, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 500);
        }
    }
    public function changeDes(Request $request)
    {

        try {
            //code...
            \DB::table('giasu')
                ->where('gs_id', \Auth::user()->giasus[0]->gs_id)
                ->update([
                    'gs_motangan' => $request->data,
                ]);
            return response()->json($request, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 500);
        }
    }
    public function changeAddress(Request $request)
    {
        try {
            //code...
            \DB::table('giasu')
                ->where('gs_id', \Auth::user()->giasus[0]->gs_id)
                ->update([
                    'gs_diachi' => $request->data,
                ]);
            return response()->json($request, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 500);
        }
    }
    public function addSchool(Request $request)
    {
        try {
            //code...
            \DB::table('truonghoc')
                ->insert([
                    'gs_id' => \Auth::user()->giasus[0]->gs_id,
                    'th_ten' => $request->school,
                    'th_chucdanh' => $request->title,
                    'th_batdau' => $request->from,
                    'th_ketthuc' => $request->to,
                ]);
            return response()->json($request, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 500);
        }
    }
    public function changeSchool(Request $request)
    {
        try {
            //code...
            \DB::table('truonghoc')
                ->where('gs_id', \Auth::user()->giasus[0]->gs_id)
                ->update([
                    'th_ten' => $request->school,
                    'th_chucdanh' => $request->title,
                    'th_batdau' => $request->from,
                    'th_ketthuc' => $request->to,
                ]);
            return response()->json($request, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 500);
        }
    }
    public function removeSchool(Request $request)
    {
        try {
            //code...
            \DB::table('giasu')
                ->where('gs_id', )
                ->where('th_id', $request->id)
                ->remove();
            return response()->json($request, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th, 500);
        }
    }
    public function getSuggestCities()
    {
        if (Request::ajax()) {
            $input = Input::all();
            $apiLink = 'https://maps.googleapis.com/maps/api/place/autocomplete/json?';
            $type = '(cities)';
            $language = 'vi';
            $key = 'xxx-your-key';
            $data = "input=$keyword&types=($type)&language=$language&key=$key";

            $getSuggestCities = @file_get_contents($apiLink . $data);

            $suggestCities = [];

            if ($getSuggestCities) {
                $getSuggestCities = json_decode($getSuggestCities);

                if ($getSuggestCities->status == 'OK') {
                    $cities = $getSuggestCities->predictions;

                    foreach ($cities as $city) {
                        $suggestCities[] = [
                            'place_id' => $city->place_id,
                            'description' => $city->description,
                        ];
                    }
                }
            }

            return Response::json($suggestCities);
        }
    }
    public function addDegree(Request $request)
    {
        $id = \Auth::user()->giasus[0]->gs_id;

        // get the original file name
        $file = $request->bc_hinhanh->getClientOriginalName();
        $type_file = \File::extension($file);
        $time = str_replace([':', '-', ' '], '_', date('Y-m-d H:i:s'));
        $name_file = $id . '/' . \Str::snake($request->bc_tenbangcap) . '_' . $time . '.' . $type_file;
        $request->bc_hinhanh->move(
            public_path('/client/img/' . $id), //nơi cần lưu
            $name_file,
        );
        $link = '/client/img/' . $name_file;
        $getID = \DB::table('bangcap')->insertGetId([
            'gs_id' => $id,
            'bc_tenbangcap' => $request->bc_tenbangcap,
            'bc_ngaycap' => $request->bc_ngaycap,
            'bc_hinhanh' => $link,
            'bc_trangthai' => 'chuaXacThuc',
        ]);
        return response()
            ->json(['link' => $link, 'id' => $getID]);
    }
    public function removeDegree(Request $request)
    {
        \DB::table('bangcap')->where('bc_id', $request->id)->delete();
        return response()->json('success', 200);
    }
    public function addSubject(Request $request)
    {

        $id = \Auth::user()->giasus[0]->gs_id;
        $dtnh = \DB::table('doituongnguoihoc')->where('dtnh_id', $request->obj)->first();
        $cm = \DB::table('chuyenmon')->where('cm_id', $request->subject)->first();
        if ($dtnh || $cm) {

            $check = \DB::table('chitietchuyenmon')
                ->where('dtnh_id', $dtnh->dtnh_id)
                ->where('cm_id', $cm->cm_id)
                ->where('gs_id', $id)
                ->first();
            if (!$check) {
                DB::beginTransaction();
                try {
                    $ctcm_id = \DB::table('chitietchuyenmon')->insertGetId([
                        'dtnh_id' => $request->obj,
                        'cm_id' => $cm->cm_id,
                        'gs_id' => $id,
                    ]);
                    $tmgs_id = \DB::table('thumucgs')->max('tmgs_id');
                    \DB::table('thumucgs')->insert([
                        'ctcm_id' => $ctcm_id,
                        'tmgs_ten' => $cm->cm_ten . '-' . $dtnh->dtnh_ten,
                        'tmgs_slug' => \Str::slug($cm->cm_ten . '-' . $dtnh->dtnh_ten) . '.' . ($tmgs_id + 1),
                        'tmgs_duongdan' => 'tai-lieu-gia-su/' . ($tmgs_id + 1) . \Str::slug($cm->cm_ten . '-' . $dtnh->dtnh_ten) . '.' . ($tmgs_id + 1),
                        'tmgs_duongdancha' => 'tai-lieu-gia-su/' . $id,
                        'gs_id' => $id,
                    ]);

                    \DB::commit();
                    return \redirect()->route('tutor.profile', $id);

                } catch (\Exception $e) {
                    \DB::rollback();
                    throw $e;
                } catch (\Throwable $e) {
                    \DB::rollback();
                    throw $e;
                }
            }
            return back()->with('error', 'Môn học này đã có');
        }
        return back()->with('error', 'Thiếu đối tượng người học hoặc chi tiết chuyên môn');

    }
    public function addClass(Request $request)
    {
        $id = \Auth::user()->giasus[0]->gs_id;
        $tutor = Giasu::where('gs_id', $id)->first();
        $doituong = Giasu::join('chitietchuyenmon', 'chitietchuyenmon.gs_id', 'giasu.gs_id')
            ->join('chuyenmon', 'chuyenmon.cm_id', 'chitietchuyenmon.cm_id')
            ->join('doituongnguoihoc', 'doituongnguoihoc.dtnh_id', 'chitietchuyenmon.dtnh_id')
            ->where('giasu.gs_id', $id)->get();
        // dd($doituong);
        return view('client.pages.account.tutor.class', compact('tutor', 'doituong'));
    }
    public function addClassStore(Request $request)
    {
        // dd($request );
        DB::beginTransaction();
        try {
            if ($request->hasFile('avatar')) {

                $id = \Auth::user()->giasus[0]->gs_id;

                //lưu file
                $file = $request->file('avatar')->getClientOriginalName();
                $type_file = \File::extension($file);
                $name_file = $file . '.' . $type_file;
                $request->file('avatar')->move(
                    public_path('/client/img/class/' . $request->type . '/'), //nơi cần lưu
                    $name_file);

                $id_class = \DB::table('lop')->insertGetId([
                    'l_mota' => $request->l_mota,
                    'l_ten' => $request->l_ten,
                    'l_gioithieu' => $request->l_gioithieu,
                    'l_hocphi' => $request->l_hocphi,
                    'l_soluong' => $request->l_soluong,
                    'l_ngaybatdau' => $request->l_ngaybatdau,
                    'l_ngayketthuc' => $request->l_ngayketthuc,
                    'l_sobuoi' => $request->l_sobuoi,
                    'l_diachi' => $request->l_diachi,
                    'l_daidien' => 'client/img/class/' . $request->type . '/' . $name_file,
                    'gs_id' => $id,
                    'ctcm_id' => $request->ctcm,
                    'l_ngaytao' => Date('y/m/d h:i:s'),
                    'l_ngaycapnhat' => Date('y/m/d h:i:s'),
                ]);
                // tạo thư mục môn học
                $thumuclop_id = \DB::table('thumuclop')->insertGetId([
                    'l_id' => $id_class,
                    'tml_ten' => $request->l_ten,
                    'tml_slug' => \Str::slug($request->l_ten) . '.' . $id_class,
                    'tml_duongdan' => 'tai-lieu-mon-hoc/' . $id_class . '/' . \Str::slug($request->l_ten),
                ]);
                foreach ($request->lich as $key => $value) {
                    \DB::table('loptgd')->insert([
                        'l_id' => $id_class,
                        'tgd_id' => \intval($value),
                    ]);
                }
                foreach ($request->lich as $key => $value) {
                    \DB::table('chitietlichday')
                        ->where('tgd_id', $value)
                        ->where('gs_id', $id)
                        ->update([
                            'ctld_trangthai' => 'Ban',
                        ]);
                }
            }

            \DB::commit();
            return redirect()->route('tutor.profile', $id);
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }
    public function updateCourseName(Request $request)
    {
        DB::beginTransaction();
        try {
            \DB::table('lop')
                ->where('l_id', $request->id)
                ->update([
                    'l_ten' => $request->data,
                ]);
            \DB::commit();
            return redirect()->route('course.intro', $request->id);
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }
    public function updateCourseDescription(Request $request)
    {
        DB::beginTransaction();
        try {
            \DB::table('lop')
                ->where('l_id', $request->id)
                ->update([
                    'l_mota' => $request->data,
                ]);
            \DB::commit();
            return redirect()->route('course.intro', $request->id);
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }
    public function updateCourseIntro(Request $request)
    {
        DB::beginTransaction();
        try {
            \DB::table('lop')
                ->where('l_id', $request->id)
                ->update([
                    'l_gioithieu' => $request->data,
                ]);
            \DB::commit();
            return redirect()->route('course.intro', $request->id);
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }
    public function uploadVideo(Request $request)
    {
        DB::beginTransaction();
        try {
            $gs = \DB::table('giasu')
                ->join('lop', 'lop.gs_id', 'giasu.gs_id')
                ->where('lop.l_id', $request->lop)
                ->first();
            if ($request->hasFile('file')) {
                foreach ($request->file('file') as $key => $value) {
                    //lưu file
                    $name = $value->getClientOriginalName();
                    $type = $value->getClientOriginalExtension();
                    // dd($request->file)
                    // dd($name);
                    $path = '/video/' . $gs->gs_id . '/' . $request->lesson . '/';
                    $value->move(
                        public_path($path), //nơi cần lưu
                        $name);
                    $getID3 = new \getID3;
                    // dd(realpath(public_path(($path.''.$name))));
                    $duration = $getID3->analyze(realpath(public_path($path . '' . $name)))['playtime_string'];

                    \DB::table('video')->insert([
                        'v_duongdan' => '/video/' . $gs->gs_id . '/' . $request->lesson . '/' . $name,
                        'v_ten' => $name,
                        'v_dodai' => $duration,
                        'v_theloai' => $type,
                        'l_id' => $request->lop,
                    ]);
                }
            }
            \DB::commit();
            return redirect()->back()->with('success', 'Tải lên video thành công');
            // return redirect()->route('course.intro', $request->lesson);
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }
    public function listClass($gs_id)
    {
        $list = \DB::table('lop')->where('gs_id', $gs_id)->get();
        $tutor = \DB::table('giasu')->where('gs_id', $gs_id)->first();
        return view('client.pages.account.tutor.listClass', compact('list', 'tutor'));
    }
}
