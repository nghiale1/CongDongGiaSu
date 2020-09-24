<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Taptinlop
 * 
 * @property int $ttl_id
 * @property int $tml_id
 * @property string $ttl_ten
 * @property string $ttl_kichthuoc
 * @property string $ttl_duongdan
 * @property Carbon $ttl_ngaytao
 * @property Carbon $ttl_ngaysua
 * @property Carbon $ttl_ngayxoa
 * 
 * @property Thumuclop $thumuclop
 *
 * @package App\Models
 */
class Taptinlop extends Model
{
	protected $table = 'taptinlop';
	protected $primaryKey = 'ttl_id';
	public $timestamps = false;

	protected $casts = [
		'tml_id' => 'int'
	];

	protected $dates = [
		'ttl_ngaytao',
		'ttl_ngaysua',
		'ttl_ngayxoa'
	];

	protected $fillable = [
		'tml_id',
		'ttl_ten',
		'ttl_kichthuoc',
		'ttl_duongdan',
		'ttl_ngaytao',
		'ttl_ngaysua',
		'ttl_ngayxoa'
	];

	public function thumuclop()
	{
		return $this->belongsTo(Thumuclop::class, 'tml_id');
	}
}
