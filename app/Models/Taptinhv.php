<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Taptinhv
 * 
 * @property int $tthv_id
 * @property int $tmhv_id
 * @property string $tthv_ten
 * @property string $tthv_kichthuoc
 * @property string $tthv_duongdan
 * @property Carbon $tthv_ngaytao
 * @property Carbon $tthv_ngaysua
 * @property Carbon $tthv_ngayxoa
 * 
 * @property Thumuchv $thumuchv
 *
 * @package App\Models
 */
class Taptinhv extends Model
{
	protected $table = 'taptinhv';
	protected $primaryKey = 'tthv_id';
	public $timestamps = false;

	protected $casts = [
		'tmhv_id' => 'int'
	];

	protected $dates = [
		'tthv_ngaytao',
		'tthv_ngaysua',
		'tthv_ngayxoa'
	];

	protected $fillable = [
		'tmhv_id',
		'tthv_ten',
		'tthv_kichthuoc',
		'tthv_duongdan',
		'tthv_ngaytao',
		'tthv_ngaysua',
		'tthv_ngayxoa'
	];

	public function thumuchv()
	{
		return $this->belongsTo(Thumuchv::class, 'tmhv_id');
	}
}
