<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;

class DocumentTutorController extends Controller
{
    public function index($id)
    {
        $doc=\DB::table('thumucgs')
        ->where('gs_id',$id)
        ->where('tmgs_tmid',null)
        ->get();
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



    function Zip2($source, $destination)
    {
        if (!extension_loaded('zip') || !file_exists($source)) {
            return false;
        }

        $zip = new ZipArchive();
        if (!$zip->open($destination, \ZIPARCHIVE::CREATE)) {
            return false;
        }

        $source = str_replace('\\', '/', realpath($source));

        if (is_dir($source) === true)
        {
            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($source), \RecursiveIteratorIterator::SELF_FIRST);

            foreach ($files as $file)
            {
                $file = str_replace('\\', '/', $file);

                // Ignore "." and ".." folders
                if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
                    continue;

                $file = realpath($file);

                if (is_dir($file) === true)
                {
                    $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                }
                else if (is_file($file) === true)
                {
                    $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                }
            }
        }
        else if (is_file($source) === true)
        {
            $zip->addFromString(basename($source), file_get_contents($source));
        }

        $zip->close();
        return \Response::download($source, $destination, array('Content-Type: application/octet-stream','Content-Length: '. filesize($source)))->deleteFileAfterSend(true);
           
    }
    public function zip(Request $request,$id)
    {
        $tmgs=\DB::table('thumucgs')->where('tmgs_id',$id)->first();
        // dd($tmgs);
        $path=$tmgs->tmgs_duongdan;
        $nameFile=$tmgs->tmgs_ten.'.zip';
        
        // dd((string)$path);
        // Get real path for our folder
        $rootPath = realpath(public_path($path));
        // dd($rootPath);

        if($rootPath){
            try {
                //code...
                // Initialize archive object
                $zip = new ZipArchive();
                $zip->open($nameFile, ZipArchive::CREATE | ZipArchive::OVERWRITE);
            
                // Create recursive directory iterator
                /** @var SplFileInfo[] $files */
                $files = new \RecursiveIteratorIterator(
                    new \RecursiveDirectoryIterator($rootPath),
                    \RecursiveIteratorIterator::LEAVES_ONLY
                );
            
                foreach ($files as $name => $file)
                {
                    // Skip directories (they would be added automatically)
                    if (!$file->isDir())
                    {
                        
                        // Get real and relative path for current file
                        $filePath = $file->getRealPath();
                        $relativePath = substr($filePath, strlen($rootPath) + 1);
            
                        // Add current file to archive
                        $zip->addFile($filePath, $relativePath);
                    }
                }
            
                // Zip archive will be created only after closing object
                $zip->close();
            
                return \Response::download(public_path($nameFile), $nameFile, array('Content-Type: application/octet-stream','Content-Length: '. filesize($nameFile)))->deleteFileAfterSend(true);
            } catch (\Throwable $th) {
                return back()->with('error','Có lỗi xảy ra');
            }

        }
        // $zip = new ZipArchive;
        // if ($zip->open(public_path($path), ZipArchive::CREATE) === TRUE)
        // {
        //     $files = File::files(public_path($tmgs->tmgs_duongdancha.'/'.$nameFile));
        //     foreach ($files as  $value) {
        //         $relativeNameInZipFile = basename($value);
        //         $zip->addFile($value, $relativeNameInZipFile);
        //     }
        //     $zip->close();
        // }
        // return response()->download(public_path($nameFile));
        return back()->with('error','Thư mục rỗng');


    }
}
