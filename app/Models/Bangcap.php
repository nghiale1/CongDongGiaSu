<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bangcap
 * 
 * @property int $bc_id
 * @property int $gs_id
 * @property string $bc_tenbangcap
 * @property string $bc_ngaycap
 * @property string $bc_hinhanh
 * @property string $bc_trangthai
 * 
 * @property Giasu $giasu
 *
 * @package App\Models
 */
class Bangcap extends Model
{
	protected $table = 'bangcap';
	protected $primaryKey = 'bc_id';
	public $timestamps = false;

	protected $casts = [
		'gs_id' => 'int'
	];

	protected $fillable = [
		'gs_id',
		'bc_tenbangcap',
		'bc_ngaycap',
		'bc_hinhanh',
		'bc_trangthai'
	];

	public function giasu()
	{
		return $this->belongsTo(Giasu::class, 'gs_id');
	}
}
