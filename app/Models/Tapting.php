<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tapting
 * 
 * @property int $ttgs_id
 * @property int $tmgs_id
 * @property string $ttgs_ten
 * @property string $ttgs_kichthuoc
 * @property string $ttgs_duongdan
 * @property Carbon $ttgs_ngaytao
 * @property Carbon $ttgs_ngaysua
 * @property Carbon $ttgs_ngayxoa
 * 
 * @property Thumucg $thumucg
 *
 * @package App\Models
 */
class Tapting extends Model
{
	protected $table = 'taptings';
	protected $primaryKey = 'ttgs_id';
	public $timestamps = false;

	protected $casts = [
		'tmgs_id' => 'int'
	];

	protected $dates = [
		'ttgs_ngaytao',
		'ttgs_ngaysua',
		'ttgs_ngayxoa'
	];

	protected $fillable = [
		'tmgs_id',
		'ttgs_ten',
		'ttgs_kichthuoc',
		'ttgs_duongdan',
		'ttgs_ngaytao',
		'ttgs_ngaysua',
		'ttgs_ngayxoa'
	];

	public function thumucg()
	{
		return $this->belongsTo(Thumucg::class, 'tmgs_id');
	}
}
