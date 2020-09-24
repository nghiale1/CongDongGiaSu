<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chuyenmon
 * 
 * @property int $cm_id
 * @property string $cm_ten
 * @property int $lv_id
 * 
 * @property Linhvuc $linhvuc
 * @property Collection|Chitietchuyenmon[] $chitietchuyenmons
 *
 * @package App\Models
 */
class Chuyenmon extends Model
{
	protected $table = 'chuyenmon';
	protected $primaryKey = 'cm_id';
	public $timestamps = false;

	protected $casts = [
		'lv_id' => 'int'
	];

	protected $fillable = [
		'cm_ten',
		'lv_id'
	];

	public function linhvuc()
	{
		return $this->belongsTo(Linhvuc::class, 'lv_id');
	}

	public function chitietchuyenmons()
	{
		return $this->hasMany(Chitietchuyenmon::class, 'cm_id');
	}
}
