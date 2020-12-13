<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use ZipArchive;

class DocumentTutorController extends Controller
{
    public function index($id)
    {
        $doc = \DB::table('thumucgs')
            ->where('gs_id', $id)
            ->where('tmgs_tmid', null)
            ->get();
        return view('client.pages.document.index', compact('doc'));

    }
    public function into($slug)
    {
        $findFolder = \DB::table('thumucgs')
            ->where('tmgs_slug', $slug)->first();
        $folder = \DB::table('thumucgs')
            ->where('tmgs_tmid', $findFolder->tmgs_id)->get();
        $file = \DB::table('taptings')
            ->where('tmgs_id', $findFolder->tmgs_id)->get();

        return view('client.pages.document.into', compact('folder', 'file', 'findFolder'));
    }

    public function Zip2($source, $destination)
    {
        if (!extension_loaded('zip') || !file_exists($source)) {
            return false;
        }

        $zip = new ZipArchive();
        if (!$zip->open($destination, \ZIPARCHIVE::CREATE)) {
            return false;
        }

        $source = str_replace('\\', '/', realpath($source));

        if (is_dir($source) === true) {
            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($source), \RecursiveIteratorIterator::SELF_FIRST);

            foreach ($files as $file) {
                $file = str_replace('\\', '/', $file);

                // Ignore "." and ".." folders
                if (in_array(substr($file, strrpos($file, '/') + 1), array('.', '..'))) {
                    continue;
                }

                $file = realpath($file);

                if (is_dir($file) === true) {
                    $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                } else if (is_file($file) === true) {
                    $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                }
            }
        } else if (is_file($source) === true) {
            $zip->addFromString(basename($source), file_get_contents($source));
        }

        $zip->close();
        return \Response::download($source, $destination, array('Content-Type: application/octet-stream', 'Content-Length: ' . filesize($source)))->deleteFileAfterSend(true);

    }
    public function zip(Request $request, $id)
    {
        $tmgs = \DB::table('thumucgs')->where('tmgs_id', $id)->first();
        // dd($tmgs);
        $path = $tmgs->tmgs_duongdan;
        $nameFile = $tmgs->tmgs_ten . '.zip';

        // dd((string)$path);
        // Get real path for our folder
        $rootPath = realpath(public_path($path));
        // dd($rootPath);

        if ($rootPath) {
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

                foreach ($files as $name => $file) {
                    // Skip directories (they would be added automatically)
                    if (!$file->isDir()) {

                        // Get real and relative path for current file
                        $filePath = $file->getRealPath();
                        $relativePath = substr($filePath, strlen($rootPath) + 1);

                        // Add current file to archive
                        $zip->addFile($filePath, $relativePath);
                    }
                }

                // Zip archive will be created only after closing object
                $zip->close();

                return \Response::download(public_path($nameFile), $nameFile, array('Content-Type: application/octet-stream', 'Content-Length: ' . filesize($nameFile)))->deleteFileAfterSend(true);
            } catch (\Throwable $th) {
                return back()->with('error', 'Có lỗi xảy ra');
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
        return back()->with('error', 'Thư mục rỗng');

    }
//Tạo thư mục môn học
    public function studentCreateFolder(Request $request)
    {
        // dd($request);
        $folderName = $request->tenthumuc;
        \DB::beginTransaction();
        try {
            //Lấy id của students
            $hv_id = \Auth::user()->hocviens[0]->hv_id;
            // try {
            $tm = \DB::table('thumuchv')->where('tmhv_id', (int) $request->thumuchientai)->first();
            \DB::table('thumuchv')->insert(
                [
                    'hv_id' => $hv_id,
                    'tmhv_ten' => $folderName,
                    'tmhv_slug' => \Str::slug($folderName),
                    'tmhv_tmid' => intval($request->thumuchientai),
                    'tmhv_duongdan' => $request->duongdan . '/' . \Str::slug($folderName),
                ]
            );
            $path = public_path() . '/' . $request->duongdan . '/' . \Str::slug($folderName);
            File::makeDirectory($path, 0777, true);
            \DB::commit();
            return redirect()->back()->with('success', 'Tạo thư mục thành công');
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }
    public function studentUpload(Request $request)
    {
        \DB::beginTransaction();
        try {
            $time_now = Carbon::now();
            try {
                //code...
                if ($request->hasFile('file')) {
                    # code...
                    foreach ($request->file('file') as $file) {
                        # code...
                        $name = $file->getClientOriginalName();
                        $size = $file->getClientSize();
                        $file->move(public_path() . '/' . $request->fo_dir, $name);
                        DB::table('files')->insert(
                            [
                                'f_name' => $name,
                                'f_size' => $size,
                                'f_path' => $request->fo_dir . '/' . $name,
                                'f_created' => $time_now,
                                'f_updated' => 'NULL',
                                'f_deleted' => 'NULL',
                                'fo_id' => $request->fo_id,
                            ]
                        );
                    }
                    return redirect()->back();
                }
            } catch (\Throwable $th) {
                //throw $th;
                dd("Có cái lỗi gì đó ở đây mà tôi không biết hihi !");
            }
            \DB::commit();
            return redirect()->back()->with('success', 'Tạo thư mục thành công');
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            \DB::rollback();
            throw $e;
        }
    }

    public function studentIndex($id)
    {
        $student = \DB::table('hocvien')->where('hv_id', $id)->first();
        $findFolder = \DB::table('thumuchv')
            ->where('hv_id', $id)
            ->where('tmhv_tmid', null)
            ->first();
        // dd($findFolder);
        $folder = \DB::table('thumuchv')
            ->where('tmhv_tmid', $findFolder->tmhv_id)->get();
        $file = \DB::table('taptinhv')
            ->where('tmhv_id', $findFolder->tmhv_id)->get();
        // dd($doc);
        return view('client.pages.account.student.docs.file', compact('folder', 'file', 'findFolder', 'student'));

    }
    public function studentInto($id, $slug)
    {

        $student = \DB::table('hocvien')->where('hv_id', $id)->first();
        $findFolder = \DB::table('thumuchv')
            ->where('tmhv_slug', $slug)->first();
        $folder = \DB::table('thumuchv')
            ->where('tmhv_tmid', $findFolder->tmhv_id)->get();
        $file = \DB::table('taptinhv')
            ->where('tmhv_id', $findFolder->tmhv_id)->get();

        return view('client.pages.account.student.docs.into', compact('folder', 'file', 'findFolder', 'student'));
    }
    public function studentZip(Request $request, $id)
    {
        $tmhv = \DB::table('thumuchv')->where('tmhv_id', $id)->first();
        // dd($tmhv);
        $path = $tmhv->tmhv_duongdan;
        $nameFile = $tmhv->tmhv_ten . '.zip';

        // dd((string)$path);
        // Get real path for our folder
        $rootPath = realpath(public_path($path));
        // dd($rootPath);

        if ($rootPath) {
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

                foreach ($files as $name => $file) {
                    // Skip directories (they would be added automatically)
                    if (!$file->isDir()) {

                        // Get real and relative path for current file
                        $filePath = $file->getRealPath();
                        $relativePath = substr($filePath, strlen($rootPath) + 1);

                        // Add current file to archive
                        $zip->addFile($filePath, $relativePath);
                    }
                }

                // Zip archive will be created only after closing object
                $zip->close();

                return \Response::download(public_path($nameFile), $nameFile, array('Content-Type: application/octet-stream', 'Content-Length: ' . filesize($nameFile)))->deleteFileAfterSend(true);
            } catch (\Throwable $th) {
                return back()->with('error', 'Có lỗi xảy ra');
            }

        }
        // $zip = new ZipArchive;
        // if ($zip->open(public_path($path), ZipArchive::CREATE) === TRUE)
        // {
        //     $files = File::files(public_path($tmhv->tmhv_duongdancha.'/'.$nameFile));
        //     foreach ($files as  $value) {
        //         $relativeNameInZipFile = basename($value);
        //         $zip->addFile($value, $relativeNameInZipFile);
        //     }
        //     $zip->close();
        // }
        // return response()->download(public_path($nameFile));
        return back()->with('error', 'Thư mục rỗng');

    }
}
