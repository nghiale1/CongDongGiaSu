<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Thumuchv
 * 
 * @property int $tmhv_id
 * @property int $hv_id
 * @property int $tmhv_tmid
 * @property string $tmhv_ten
 * @property string $tmhv_slug
 * @property string $tmhv_duongdan
 * 
 * @property Hocvien $hocvien
 * @property Collection|Taptinhv[] $taptinhvs
 *
 * @package App\Models
 */
class Thumuchv extends Model
{
	protected $table = 'thumuchv';
	protected $primaryKey = 'tmhv_id';
	public $timestamps = false;

	protected $casts = [
		'hv_id' => 'int',
		'tmhv_tmid' => 'int'
	];

	protected $fillable = [
		'hv_id',
		'tmhv_tmid',
		'tmhv_ten',
		'tmhv_slug',
		'tmhv_duongdan'
	];

	public function hocvien()
	{
		return $this->belongsTo(Hocvien::class, 'hv_id');
	}

	public function taptinhvs()
	{
		return $this->hasMany(Taptinhv::class, 'tmhv_id');
	}
}
