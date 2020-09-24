<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Thumucg
 * 
 * @property int $tmgs_id
 * @property int $ctcm_id
 * @property int $tmgs_tmid
 * @property string $tmgs_ten
 * @property string $tmgs_slug
 * @property string $tmgs_duongdan
 * 
 * @property Chitietchuyenmon $chitietchuyenmon
 * @property Collection|Tapting[] $taptings
 *
 * @package App\Models
 */
class Thumucg extends Model
{
	protected $table = 'thumucgs';
	protected $primaryKey = 'tmgs_id';
	public $timestamps = false;

	protected $casts = [
		'ctcm_id' => 'int',
		'tmgs_tmid' => 'int'
	];

	protected $fillable = [
		'ctcm_id',
		'tmgs_tmid',
		'tmgs_ten',
		'tmgs_slug',
		'tmgs_duongdan'
	];

	public function chitietchuyenmon()
	{
		return $this->belongsTo(Chitietchuyenmon::class, 'ctcm_id');
	}

	public function taptings()
	{
		return $this->hasMany(Tapting::class, 'tmgs_id');
	}
}
