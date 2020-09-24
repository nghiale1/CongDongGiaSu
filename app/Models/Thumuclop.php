<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Thumuclop
 * 
 * @property int $tml_id
 * @property int $l_id
 * @property int $tml_tmid
 * @property string $tml_ten
 * @property string $tml_slug
 * @property string $tml_duongdan
 * 
 * @property Lop $lop
 * @property Collection|Taptinlop[] $taptinlops
 *
 * @package App\Models
 */
class Thumuclop extends Model
{
	protected $table = 'thumuclop';
	protected $primaryKey = 'tml_id';
	public $timestamps = false;

	protected $casts = [
		'l_id' => 'int',
		'tml_tmid' => 'int'
	];

	protected $fillable = [
		'l_id',
		'tml_tmid',
		'tml_ten',
		'tml_slug',
		'tml_duongdan'
	];

	public function lop()
	{
		return $this->belongsTo(Lop::class, 'l_id');
	}

	public function taptinlops()
	{
		return $this->hasMany(Taptinlop::class, 'tml_id');
	}
}
