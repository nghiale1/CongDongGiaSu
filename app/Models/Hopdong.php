<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hopdong
 * 
 * @property int $hd_id
 * @property int $hv_id
 * @property int $l_id
 * @property Carbon $hd_ngayky
 * @property string $hd_camketdiem
 * @property Carbon $hd_hieuluctu
 * @property Carbon $hd_hieulucden
 * 
 * @property Hocvien $hocvien
 * @property Lop $lop
 * @property Collection|Danhgiag[] $danhgiags
 * @property Collection|Danhgiahv[] $danhgiahvs
 *
 * @package App\Models
 */
class Hopdong extends Model
{
	protected $table = 'hopdong';
	protected $primaryKey = 'hd_id';
	public $timestamps = false;

	protected $casts = [
		'hv_id' => 'int',
		'l_id' => 'int'
	];

	protected $dates = [
		'hd_ngayky',
		'hd_hieuluctu',
		'hd_hieulucden'
	];

	protected $fillable = [
		'hv_id',
		'l_id',
		'hd_ngayky',
		'hd_camketdiem',
		'hd_hieuluctu',
		'hd_hieulucden'
	];

	public function hocvien()
	{
		return $this->belongsTo(Hocvien::class, 'hv_id');
	}

	public function lop()
	{
		return $this->belongsTo(Lop::class, 'l_id');
	}

	public function danhgiags()
	{
		return $this->hasMany(Danhgiag::class, 'hd_id');
	}

	public function danhgiahvs()
	{
		return $this->hasMany(Danhgiahv::class, 'hd_id');
	}
}
