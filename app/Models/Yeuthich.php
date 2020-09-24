<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Yeuthich
 * 
 * @property int $gs_id
 * @property int $hv_id
 * 
 * @property Giasu $giasu
 * @property Hocvien $hocvien
 *
 * @package App\Models
 */
class Yeuthich extends Model
{
	protected $table = 'yeuthich';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gs_id' => 'int',
		'hv_id' => 'int'
	];

	public function giasu()
	{
		return $this->belongsTo(Giasu::class, 'gs_id');
	}

	public function hocvien()
	{
		return $this->belongsTo(Hocvien::class, 'hv_id');
	}
}
