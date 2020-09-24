<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chitietchuyenmon
 * 
 * @property int $ctcm_id
 * @property int $gs_id
 * @property int $cm_id
 * @property int $dtnh_id
 * 
 * @property Chuyenmon $chuyenmon
 * @property Doituongnguoihoc $doituongnguoihoc
 * @property Giasu $giasu
 * @property Collection|Thumucg[] $thumucgs
 *
 * @package App\Models
 */
class Chitietchuyenmon extends Model
{
	protected $table = 'chitietchuyenmon';
	protected $primaryKey = 'ctcm_id';
	public $timestamps = false;

	protected $casts = [
		'gs_id' => 'int',
		'cm_id' => 'int',
		'dtnh_id' => 'int'
	];

	protected $fillable = [
		'gs_id',
		'cm_id',
		'dtnh_id'
	];

	public function chuyenmon()
	{
		return $this->belongsTo(Chuyenmon::class, 'cm_id');
	}

	public function doituongnguoihoc()
	{
		return $this->belongsTo(Doituongnguoihoc::class, 'dtnh_id');
	}

	public function giasu()
	{
		return $this->belongsTo(Giasu::class, 'gs_id');
	}

	public function thumucgs()
	{
		return $this->hasMany(Thumucg::class, 'ctcm_id');
	}
}
