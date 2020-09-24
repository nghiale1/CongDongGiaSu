<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hocvien
 * 
 * @property int $hv_id
 * @property string $hv_hinhdaidien
 * @property string $hv_hoten
 * @property string $hv_gioitinh
 * @property string $hv_trinhdo
 * @property string $hv_hocluc
 * @property string $hv_tentruong
 * @property int $tk_id
 * 
 * @property Taikhoan $taikhoan
 * @property Collection|Hopdong[] $hopdongs
 * @property Collection|Thumuchv[] $thumuchvs
 *
 * @package App\Models
 */
class Hocvien extends Model
{
	protected $table = 'hocvien';
	protected $primaryKey = 'hv_id';
	public $timestamps = false;

	protected $casts = [
		'tk_id' => 'int'
	];

	protected $fillable = [
		'hv_hinhdaidien',
		'hv_hoten',
		'hv_gioitinh',
		'hv_trinhdo',
		'hv_hocluc',
		'hv_tentruong',
		'tk_id'
	];

	public function taikhoan()
	{
		return $this->belongsTo(Taikhoan::class, 'tk_id');
	}

	public function hopdongs()
	{
		return $this->hasMany(Hopdong::class, 'hv_id');
	}

	public function thumuchvs()
	{
		return $this->hasMany(Thumuchv::class, 'hv_id');
	}
}
