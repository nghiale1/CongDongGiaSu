<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Giasu;

class TutorController extends Controller
{
    public function changeStatusSchedule(Request $request)
    {
        if($request->type=='free'){
            $status='Ban';
        }else{
            $status='Ranh';
        }
        try {
            //code...
            \DB::table('chitietlichday')
            ->where('gs_id',\Auth::user()->giasus[0]->gs_id)
            ->where('tgd_id',$request->id+1)
            ->update([
                'ctld_trangthai'=>$status
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
            ->where('gs_id',\Auth::user()->giasus[0]->gs_id)
            ->update([
                'gs_gioithieu'=>$request->data
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
            ->where('gs_id',\Auth::user()->giasus[0]->gs_id)
            ->update([
                'gs_motangan'=>$request->data
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
            ->where('gs_id',\Auth::user()->giasus[0]->gs_id)
            ->update([
                'gs_diachi'=>$request->data
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
                'gs_id'=>\Auth::user()->giasus[0]->gs_id,
                'th_ten'=>$request->school,
                'th_chucdanh'=>$request->title,
                'th_batdau'=>$request->from,
                'th_ketthuc'=>$request->to
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
            ->where('gs_id',\Auth::user()->giasus[0]->gs_id)
            ->update([
                'th_ten'=>$request->school,
                'th_chucdanh'=>$request->title,
                'th_batdau'=>$request->from,
                'th_ketthuc'=>$request->to
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
            ->where('gs_id',)
            ->where('th_id',$request->id)
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
        $id=\Auth::user()->giasus[0]->gs_id;
        
        // get the original file name
        $file = $request->bc_hinhanh->getClientOriginalName();
        $type_file = \File::extension($file);
        $time=str_replace([':', '-', ' '], '_', date('Y-m-d H:i:s'));
        $name_file=$id.'/'.\Str::snake($request->bc_tenbangcap).'_'.$time.'.'.$type_file;
        $request->bc_hinhanh->move(
            public_path('/client/img/'.$id), //nơi cần lưu
            $name_file,
        );
        $link='/client/img/'.$name_file;
        $getID=\DB::table('bangcap')->insertGetId([
            'gs_id'=>$id,
            'bc_tenbangcap'=>$request->bc_tenbangcap,
            'bc_ngaycap'=>$request->bc_ngaycap,
            'bc_hinhanh'=>$link,
            'bc_trangthai'=>'chuaXacThuc',
        ]);
       return response()
       ->json(['link' => $link,'id'=>$getID]);
    }
    public function removeDegree(Request $request)  
    {
        \DB::table('bangcap')->where('bc_id',$request->id)->delete();
        return response()->json('success', 200);
    }
    public function addSubject(Request $request)
    {
       $dtnh=\DB::table('doituongnguoihoc')->where('dtnh_id',$request->obj)->first();
       $cm=\DB::table('chuyenmon')->where('cm_id',$request->subject)->first();
       if($dtnh||$cm){

            $check=\DB::table('chitietchuyenmon')
            ->where('dtnh_id',$dtnh->dtnh_id)
            ->where('cm_id',$cm->cm_id)
            ->where('gs_id',\Auth::user()->giasus[0]->gs_id)
            ->first();
            if(!$check){
                \DB::table('chitietchuyenmon')->insert([
                    'dtnh_id'=>$request->obj,
                    'cm_id'=>$request->subject,
                    'gs_id'=>\Auth::user()->giasus[0]->gs_id
                ]);
            }
       }
       return \redirect()->route('tutor.profile',\Auth::user()->giasus[0]->gs_id);
    }
    public function addClass(Request $request)
    {
        $id=\Auth::user()->giasus[0]->gs_id;
        $tutor=Giasu::where('gs_id',$id)->first();
        $doituong=Giasu::join('chitietchuyenmon','chitietchuyenmon.gs_id','giasu.gs_id')
        ->join('chuyenmon','chuyenmon.cm_id','chitietchuyenmon.cm_id')
        ->join('doituongnguoihoc','doituongnguoihoc.dtnh_id','chitietchuyenmon.dtnh_id')
        ->where('giasu.gs_id',$id)->get();
        // dd($doituong);
        return view('client.pages.account.tutor.class',compact('tutor','doituong'));
    }
    public function addClassStore(Request $request)
    {
        dd($request );
        DB::beginTransaction();
        try {

            $id=\Auth::user()->giasus[0]->gs_id;
            $id_class=\DB::table('lop')->insertGetId([
            'l_mota'=>$request->l_mota,
            'l_ten'=>$request->l_ten,
            'l_gioithieu'=>$request->l_gioithieu,
            'l_hocphi'=>$request->l_hocphi,
            'l_soluong'=>$request->l_soluong,
            'l_ngaybatdau'=>$request->l_ngaybatdau,
            'l_ngayketthuc'=>$request->l_ngayketthuc,
            'l_sobuoi'=>$request->l_sobuoi,
            'l_diachi'=>$request->l_diachi,
            'gs_id'=>$id,
            'ctcm_id'=>$request->ctcm,
        ]);
        foreach ($request->lich as $key => $value) {
            \DB::table('loptgd')->insert([
                'l_id'=>$id_class,
                'tgd_id'=>$value,
                ]);
            }
        foreach ($request->lich as $key => $value) {
            \DB::table('chitietlichday')
            ->where('tgd_id',$value)
            ->where('gs_id',$id)
            ->update([
                'ctld_trangthai'=>'Ban'
                ]);
        }
        
            \DB::commit();
        }catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }
}
