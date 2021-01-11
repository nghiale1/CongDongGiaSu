<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function now()
    {
        Carbon::setlocale('vi');
        return $now = Carbon::now();

    }
    // tính ngày đã đăng quá 10 ngày chưa
    public function diffInDays($create)
    {
        $ten_day = Carbon::parse($create)->diffInDays($this->now());
        if ($ten_day > 10) {
            return false;
        }
        return true;

    }
    public function getDay($time, $create)
    {
        $ten_day = $this->diffInDays($create);
        if ($ten_day) {

            return $day[$time] = Carbon::parse($create)->diffForHumans();
        } else {
            return $day[$time] = $this->format_date($create);
        }
    }

    // format định dạng ngày tháng năm
    public function format_date($date)
    {
        return date('d-m-Y', strtotime($date));
    }
    public function infoTutor($id)
    {
        $tutor = Giasu::where('gs_id', $id)
            ->first();
        return $tutor;
    }
    public function hv_id()
    {
        $temp = \Auth::user()->hocviens[0]->hv_id;
        return $temp;
    }
    public function formatSize($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;

    }
}
