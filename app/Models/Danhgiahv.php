<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Danhgiahv
 * 
 * @property int $dghv_id
 * @property int $hd_id
 * @property int $dghv_sodiem
 * @property string $dghv_noidung
 * 
 * @property Hopdong $hopdong
 *
 * @package App\Models
 */
class Danhgiahv extends Model
{
	protected $table = 'danhgiahv';
	protected $primaryKey = 'dghv_id';
	public $timestamps = false;

	protected $casts = [
		'hd_id' => 'int',
		'dghv_sodiem' => 'int'
	];

	protected $fillable = [
		'hd_id',
		'dghv_sodiem',
		'dghv_noidung'
	];

	public function hopdong()
	{
		return $this->belongsTo(Hopdong::class, 'hd_id');
	}
}
