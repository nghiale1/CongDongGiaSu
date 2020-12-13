<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Taikhoan
 *
 * @property int $tk_id
 * @property string $username
 * @property string $password
 * @property string $tk_quyen
 * @property string $remember_token
 *
 * @property Collection|Giasu[] $giasus
 * @property Collection|Hocvien[] $hocviens
 * @property Collection|Phanhoi[] $phanhois
 *
 * @package App\Models
 */
class Taikhoan extends Authenticatable
{
    protected $table = 'taikhoan';
    protected $primaryKey = 'tk_id';
    public $timestamps = false;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'username',
        'password',
        'tk_quyen',
        'remember_token',
    ];

    public function giasus()
    {
        return $this->hasMany(Giasu::class, 'tk_id');
    }

    public function hocviens()
    {
        return $this->hasMany(Hocvien::class, 'tk_id');
    }
    public function giaodichs()
    {
        return $this->hasMany(Giaodich::class, 'tk_id');
    }
    public static function kiemTraGiaoDich($l_id)
    {
        $check = \DB::table('giaodich')->where('l_id', $l_id)
            ->where('tk_id', \Auth::id())->first();
        return $check ? true : false;
    }
    public static function kiemTraLopHoc($l_id)
    {
        $check = false;
        // check giasu
        if (\Auth::user()->hasRole('GiaSu')) {

            $check = \DB::table('taikhoan')
                ->join('giasu', 'giasu.tk_id', 'taikhoan.tk_id')
                ->join('lop', 'lop.gs_id', 'giasu.gs_id')
                ->where('l_id', $l_id)
                ->where('taikhoan.tk_id', \Auth::id())->first();
        }
        return $check ? true : false;
    }
    public static function kiemTraGiaSu($gs_id)
    {
        $check = false;
        // check giasu
        if (\Auth::user()->hasRole('GiaSu')) {

            $check = \DB::table('taikhoan')
                ->join('giasu', 'giasu.tk_id', 'taikhoan.tk_id')
                ->where('gs_id', $gs_id)
                ->where('taikhoan.tk_id', \Auth::id())->first();
        }
        return $check ? true : false;
    }
    public static function kiemTraHocVien($hv_id)
    {
        $check = false;
        // check giasu
        if (\Auth::user()->hasRole('HocVien')) {

            $check = \DB::table('taikhoan')
                ->join('hocvien', 'hocvien.tk_id', 'taikhoan.tk_id')
                ->where('hv_id', $hv_id)
                ->where('taikhoan.tk_id', \Auth::id())->first();
        }
        return $check ? true : false;
    }

    public function phanhois()
    {
        return $this->hasMany(Phanhoi::class, 'tk_id');
    }
    public function hasRole($role)
    {
        $roles = $this->tk_quyen;

        if ($roles == $role) {
            return true;
        } else {
            return false;
        }
    }
}
