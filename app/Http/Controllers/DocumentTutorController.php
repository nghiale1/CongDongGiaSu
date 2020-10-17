<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentTutorController extends Controller
{
    public function index($id)
    {
        $doc=\DB::table('thumucgs')
        ->where('gs_id',$id)->get();
        return view('client.pages.document.index',compact('doc'));

    }
    public function into($slug){
        $findFolder=\DB::table('thumucgs')
        ->where('tmgs_slug',$slug)->first();
        $folder=\DB::table('thumucgs')
        ->where('tmgs_tmid',$findFolder->tmgs_id)->get();
        $file=\DB::table('taptings')
        ->where('tmgs_id',$findFolder->tmgs_id)->get();

        return view('client.pages.document.into',compact('folder','file','findFolder'));
    }
}
