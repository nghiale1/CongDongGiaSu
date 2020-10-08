<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lop;
class PageController extends Controller
{
    public function index()
    {
        $linhvuc=\DB::table('linhvuc')->get();
        return view('client.pages.index',compact('linhvuc'));
    }
    public function course($id)
    {
        $lop=Lop::find($id)->load('giasu');
        return view('client.pages.class.intro',compact('lop'));
    }
}
