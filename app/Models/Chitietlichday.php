<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chitietlichday
 * 
 * @property int $ctld_id
 * @property int $gs_id
 * @property int $tgd_id
 * @property string $ctld_trangthai
 * 
 * @property Giasu $giasu
 * @property Thoigianday $thoigianday
 *
 * @package App\Models
 */
class Chitietlichday extends Model
{
	protected $table = 'chitietlichday';
	protected $primaryKey = 'ctld_id';
	public $timestamps = false;

	protected $casts = [
		'gs_id' => 'int',
		'tgd_id' => 'int'
	];

	protected $fillable = [
		'gs_id',
		'tgd_id',
		'ctld_trangthai'
	];

	public function giasu()
	{
		return $this->belongsTo(Giasu::class, 'gs_id');
	}

	public function thoigianday()
	{
		return $this->belongsTo(Thoigianday::class, 'tgd_id');
	}
}
