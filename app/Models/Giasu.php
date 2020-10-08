<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Giasu
 * 
 * @property int $gs_id
 * @property string $gs_hinhdaidien
 * @property string $gs_videogioithieu
 * @property string $gs_motangan
 * @property string $gs_gioithieu
 * @property string $gs_hoten
 * @property string $gs_gioitinh
 * @property string $gs_namsinh
 * @property string $gs_sdt
 * @property string $gs_diachi
 * @property string $gs_mucluong
 * @property string $gs_giongnoi
 * @property string $gs_vitri
 * @property int $tk_id
 * 
 * @property Taikhoan $taikhoan
 * @property Collection|Bangcap[] $bangcaps
 * @property Collection|Chitietchuyenmon[] $chitietchuyenmons
 * @property Collection|Chitietlichday[] $chitietlichdays
 * @property Collection|Lop[] $lops
 * @property Collection|Truonghoc[] $truonghocs
 * @property Collection|Yeuthich[] $yeuthiches
 *
 * @package App\Models
 */
class Giasu extends Model
{
	protected $table = 'giasu';
	protected $primaryKey = 'gs_id';
	public $timestamps = false;

	protected $casts = [
		'tk_id' => 'int'
	];

	protected $fillable = [
		'gs_hinhdaidien',
		'gs_videogioithieu',
		'gs_motangan',
		'gs_gioithieu',
		'gs_hoten',
		'gs_gioitinh',
		'gs_namsinh',
		'gs_sdt',
		'gs_diachi',
		'gs_mucluong',
		'gs_giongnoi',
		'gs_vitri',
		'tk_id'
	];

	public function taikhoan()
	{
		return $this->belongsTo(Taikhoan::class, 'tk_id');
	}

	public function bangcaps()
	{
		return $this->hasMany(Bangcap::class, 'gs_id');
	}

	public function chitietchuyenmons()
	{
		return $this->hasMany(Chitietchuyenmon::class, 'gs_id');
	}

	public function chitietlichdays()
	{
		return $this->hasMany(Chitietlichday::class, 'gs_id');
	}

	public function lops()
	{
		return $this->hasMany(Lop::class, 'gs_id');
	}

	public function truonghocs()
	{
		return $this->hasMany(Truonghoc::class, 'gs_id');
	}

	public function yeuthiches()
	{
		return $this->hasMany(Yeuthich::class, 'gs_id');
	}
}
