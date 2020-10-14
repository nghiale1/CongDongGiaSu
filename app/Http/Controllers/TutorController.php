<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
