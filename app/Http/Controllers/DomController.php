<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomController extends Controller
{
    public function getSubject(Request $request)
    {
        $result=DB::table('linhvuc')->get();
        return response()->json($result, 200);
    }
}
