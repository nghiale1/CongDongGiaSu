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
            return response()->json(['status' => 'ok', 'id' => $check->dsc_id, 'chatId' => $check->chatId], 200);
        } else {
            $max = \DB::table('danhsachchatgs')->max('dsc_id');
            if (!$max) {$max = 0;}
            $id = \DB::table('danhsachchatgs')->insertGetId([
                'chatId' => 'giasu' . ($max + 1),
                'tk_id' => $request->tk_id,
                'gs_id' => $request->gs_id,
            ]);

            return response()->json(['status' => 'new', 'id' => $id, 'chatId' => 'giasu' . ($max + 1)], 200);
        }
        return response()->json(['status' => 'no data', 'id' => 0], 200);

    }
    public function checkChatLop(Request $request)
    {

    }
    public function listChat(Request $request)
    {

    }
}
