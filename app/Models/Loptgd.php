<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Loptgd
 * 
 * @property int $l_id
 * @property int $tgd_id
 * 
 * @property Lop $lop
 * @property Thoigianday $thoigianday
 *
 * @package App\Models
 */
class Loptgd extends Model
{
	protected $table = 'loptgd';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'l_id' => 'int',
		'tgd_id' => 'int'
	];

	public function lop()
	{
		return $this->belongsTo(Lop::class, 'l_id');
	}

	public function thoigianday()
	{
		return $this->belongsTo(Thoigianday::class, 'tgd_id');
	}
}
