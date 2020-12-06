<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Giaodich
 * 
 * @property int $gd_id
 * @property int $hv_id
 * @property int $l_id
 * @property int $gd_tongtien
 * @property Carbon $gd_ngaytao
 * @property Carbon $gd_ngaysua
 * @property Carbon $gd_ngayxoa
 * 
 * @property Taikhoan $tai_khoan
 * @property Lop $lop
 *
 * @package App\Models
 */
class Giaodich extends Model
{
	protected $table = 'giaodich';
	protected $primaryKey = 'gd_id';
	public $timestamps = false;

	protected $casts = [
		'tk_id' => 'int',
		'l_id' => 'int',
		'gd_tongtien' => 'int',
		'gd_trangthai' => 'int'
	];

	protected $dates = [
		'gd_ngaytao',
		'gd_ngaysua',
		'gd_ngayxoa'
	];

	protected $fillable = [
		'tk_id',
		'l_id',
		'gd_trangthai',
		'gd_tongtien',
		'gd_ngaytao',
		'gd_ngaysua',
		'gd_ngayxoa'
	];

	public function hocvien()
	{
		return $this->belongsTo(Taikhoan::class, 'tk_id');
	}

	public function lop()
	{
		return $this->belongsTo(Lop::class, 'l_id');
	}
}
