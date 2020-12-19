<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function checkChatGS(Request $request)
    {

        $check = \DB::table('danhsachchatgs')
            ->where('tk_id', $request->tk_id)
            ->where('gs_id', $request->gs_id)
            ->first();
        if ($check) {
            // \DB::table('danhsachchatgs')
            //     ->where('tk_id', $request->tk_id)
            //     ->where('gs_id', $request->gs_id)
            //     ->update(['time' => $request->time]);
            // return response()->json(['status' => 'ok', 'id' => $check->dsc_id, 'chatId' => $check->chatId, 'time' => $request->time], 200);
            return response()->json(['status' => 'ok', 'id' => $check->dsc_id, 'chatId' => $check->chatId], 200);
        } else {
            $max = \DB::table('danhsachchatgs')->max('dsc_id');
            if (!$max) {$max = 0;}
            $id = \DB::table('danhsachchatgs')->insertGetId([
                'chatId' => 'giasu' . ($max + 1),
                'tk_id' => $request->tk_id,
                'gs_id' => $request->gs_id,
                // 'time' => $request->time,
            ]);

            // return response()->json(['status' => 'new', 'id' => $id, 'chatId' => 'giasu' . ($max + 1), 'time' => $request->time], 200);
            return response()->json(['status' => 'new', 'id' => $id, 'chatId' => 'giasu' . ($max + 1)], 200);
        }
        return response()->json(['status' => 'no data', 'id' => 0], 200);

    }
    public function checkChatLop(Request $request)
    {
        $list = \DB::table('danhsachchatgs')
            ->join('taikhoan', 'taikhoan.tk_id', 'danhsachchatgs.tk_id')
            ->join('hocvien', 'hocvien.tk_id', 'taikhoan.tk_id')
            ->where('danhsachchatgs.gs_id', \Auth::user()->giasus[0]->gs_id)
            ->get();
        return response()->json($list, 200);
    }
    public function listMessage()
    {
        $list = \DB::table('danhsachchatgs')
            ->join('taikhoan', 'taikhoan.tk_id', 'danhsachchatgs.tk_id')
            ->join('hocvien', 'hocvien.tk_id', 'taikhoan.tk_id')
            ->where('danhsachchatgs.gs_id', \Auth::user()->giasus[0]->gs_id)
            ->get();
        return $list;
    }
    public function message()
    {
        $list = \DB::table('danhsachchatgs')
            ->join('taikhoan', 'taikhoan.tk_id', 'danhsachchatgs.tk_id')
            ->join('hocvien', 'hocvien.tk_id', 'taikhoan.tk_id')
            ->where('danhsachchatgs.gs_id', \Auth::user()->giasus[0]->gs_id)
            ->get();
        return view('client.pages.account.tutor.message', compact('list'));
    }
}
